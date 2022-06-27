<?php

namespace App\Http\Controllers;

use App\Events\MakeNewRowEvent;
use App\Models\Row;
use Illuminate\Http\Request;

class RowController extends Controller {

    /**
     * Показать форму для создания новой записи.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create() {
        return view('create');
    }

    /**
     * Добавление новой записи в БД.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        if($validated) {
            $date = new \DateTime();
            $formatDate = $date->format('d.m.Y');

            $row = new Row;
            $row->name = $request->name;
            $row->date = $formatDate;
            $row->save();

            event(new MakeNewRowEvent('Новая запись добавлена из контроллера.'));
            return response()->json('Created', 201);
        }
    }
}
