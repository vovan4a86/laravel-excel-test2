<?php

namespace App\Imports;

use App\Models\Row;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class RowsImport implements ToModel, WithValidation, WithHeadingRow, WithChunkReading {

    use Importable;
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row) {
//        dd($row);
        if(isset($row['id']) && $row['id']) {
            return new Row([
                'id' => $row['id'],
                'name' => $row['name'],
                'date' => Date::excelToDateTimeObject($row['date'])->format('d.m.Y'),
            ]);
        }
    }

    public function rules(): array {
        return [
//            'id' => 'required|integer',
//            'name' => 'required|string',
//            'date' => 'required|date_format:d.m.Y'
        ];
    }

    public function chunkSize(): int {
        return 1000;
    }
}
