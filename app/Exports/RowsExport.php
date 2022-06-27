<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RowsExport implements FromArray, WithHeadings {

    protected $rows;

    public function __construct(array $rows) {
        $this->rows = $rows;
    }

    public function array(): array {
        $array = [];
        foreach ($this->rows as $row) {
            $array[$row['date']] = array(
                'id' => $row['id'], 'name' => $row['name']
            );
        }
        return $array;
    }

    public function headings(): array {
        return [
            'date',
            'id',
            'name',
        ];
    }
}
