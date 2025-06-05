<?php

namespace Callmeaf\ProductContent\App\Imports\Admin\V1;

use Callmeaf\Base\App\Services\Importer;
use Callmeaf\ProductContent\App\Enums\ProductContentStatus;
use Callmeaf\ProductContent\App\Repo\Contracts\ProductContentRepoInterface;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductContentsImport extends Importer implements ToCollection,WithChunkReading,WithStartRow,SkipsEmptyRows,WithValidation,WithHeadingRow
{
    private ProductContentRepoInterface $productcontentRepo;

    public function __construct()
    {
        $this->productcontentRepo = app(ProductContentRepoInterface::class);
    }

    public function collection(Collection $collection)
    {
        $this->total = $collection->count();

        foreach ($collection as $row) {
            $this->productcontentRepo->freshQuery()->create([
                // 'status' => $row['status'],
            ]);
            ++$this->success;
        }
    }

    public function chunkSize(): int
    {
        return \Base::config('import_chunk_size');
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        $table = $this->productcontentRepo->getTable();
        return [
            // 'status' => ['required',Rule::enum(ProductContentStatus::class)],
        ];
    }

}
