<?php

namespace App\Http\Controllers;

use App\Models\Rekening1;
use App\Models\Rekening2;
use DataTables;
use Illuminate\Http\Request;

class Rekening2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.rekening-2.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Rekening2();
        $rekening1 = Rekening1::pluck('nama', 'id')->all();
        return view('pages.admin.rekening-2.form', compact('model', 'rekening1'));
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
            'kode' => 'required|unique:rekening2,kode',
            'nama' => 'required',
            'rekening1_id' => 'required',
        ]);

        $model = Rekening2::create($request->all());

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
        $model = Rekening2::findOrFail($id);

        return view('pages.admin.rekening-2.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Rekening2::findOrFail($id);
        $rekening1 = Rekening1::pluck('nama', 'id')->all();

        return view('pages.admin.rekening-2.form', compact('model', 'rekening1'));
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
            'kode' => 'required|unique:rekening2,kode,' . $id,
            'nama' => 'required',
            'rekening1_id' => 'required',
        ]);

        $model = Rekening2::findOrfail($id);
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
        $model = Rekening2::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = Rekening2::with('rekening1');
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.rekening-2.show', $model->id),
                    'url_edit' => route('admin.rekening-2.edit', $model->id),
                    'url_destroy' => route('admin.rekening-2.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
