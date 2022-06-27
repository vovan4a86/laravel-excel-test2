<?php

namespace App\Http\Controllers;

use App\Exports\RowsExport;
use App\Imports\RowsImport;
use App\Models\Row;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller {

    /**
     * Импортирование xls-файла в БД
    */

    public function import(Request $request) {
        Excel::import(new RowsImport, $request->file('formFile'));
        return redirect('/')->with('success', 'All good!');
    }

    /**
     * Вывод данных в двумерный массив
    */

    public function output() {
        $rows = new RowsExport(Row::all()->toArray());
        $export = $rows->array();

        return view('show', [
           'rows' => $export
        ]);
    }
}
