<?php

namespace App\Http\Controllers;

use App\Models\Rekening1;
use DataTables;
use Illuminate\Http\Request;

class Rekening1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.rekening-1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Rekening1();
        return view('pages.admin.rekening-1.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $model = Rekening1::create($request->all());

        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Rekening1::findOrFail($id);

        return view('pages.admin.rekening-1.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Rekening1::findOrFail($id);

        return view('pages.admin.rekening-1.form', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $model = Rekening1::findOrfail($id);
        $model->update($request->all());

        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Rekening1::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = Rekening1::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.rekening-1.show', $model->id),
                    'url_edit' => route('admin.rekening-1.edit', $model->id),
                    'url_destroy' => route('admin.rekening-1.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
