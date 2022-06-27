<?php

namespace App\Http\Controllers;

use App\Exports\RowsExport;
use App\Imports\RowsImport;
use App\Models\Row;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller {

    public function import(Request $request) {
        Excel::import(new RowsImport, $request->file('formFile'));
        return redirect('/')->with('success', 'All good!');
    }

    public function output() {
        $rows = new RowsExport(Row::all()->toArray());
        $export = $rows->array();

        return view('show', [
           'rows' => $export
        ]);
    }
}
