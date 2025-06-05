<?php

namespace Callmeaf\ProductContent\App\Exports\Api\V1;

use Callmeaf\ProductContent\App\Models\ProductContent;
use Callmeaf\ProductContent\App\Repo\Contracts\ProductContentRepoInterface;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class ProductContentsExport implements FromCollection,WithHeadings,Responsable,WithMapping,WithCustomChunkSize
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private $fileName = '';

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    private ProductContentRepoInterface $productcontentRepo;
    public function __construct()
    {
        $this->productcontentRepo = app(ProductContentRepoInterface::class);
        $this->fileName = $this->fileName ?: \Base::exportFileName(model: $this->productcontentRepo->getModel()::class,extension: $this->writerType);
    }

    public function collection()
    {
        if(\Base::getTrashedData()) {
            $this->productcontentRepo->trashed();
        }

        $this->productcontentRepo->latest()->search();

        if(\Base::getAllPagesData()) {
            return $this->productcontentRepo->lazy();
        }

        return $this->productcontentRepo->paginate();
    }

    public function headings(): array
    {
        return [
           // 'status',
        ];
    }

    /**
     * @param ProductContent $row
     * @return array
     */
    public function map($row): array
    {
        return [
            // $row->status?->value,
        ];
    }

    public function chunkSize(): int
    {
        return \Base::config('export_chunk_size');
    }
}
