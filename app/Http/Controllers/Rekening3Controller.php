<?php

namespace App\Http\Controllers;

use App\Models\Rekening2;
use App\Models\Rekening3;
use App\Models\Bumd;
use DataTables;
use Illuminate\Http\Request;

class Rekening3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.rekening-3.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Rekening3();
        $rekening2 = Rekening2::pluck('nama', 'id')->all();
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.rekening-3.form', compact('model', 'rekening2', 'bumd'));
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
            'rekening2_id' => 'required',
            'bumd_id' => 'required',
        ]);

        $model = Rekening3::create($request->all());

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
        $model = Rekening3::findOrFail($id);

        return view('pages.admin.rekening-3.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Rekening3::findOrFail($id);
        $rekening2 = Rekening2::pluck('nama', 'id')->all();
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.rekening-3.form', compact('model', 'rekening2', 'bumd'));
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
            'rekening2_id' => 'required',
            'bumd_id' => 'required',
        ]);

        $model = Rekening3::findOrfail($id);
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
        $model = Rekening3::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = Rekening3::with(['rekening2', 'bumd']);
        return DataTables::of($model)
            ->addColumn('kode_semua', function ($model) {
                return $model->bumd->id . '.' . $model->rekening2->kode . '.' . $model->kode;
            })
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.rekening-3.show', $model->id),
                    'url_edit' => route('admin.rekening-3.edit', $model->id),
                    'url_destroy' => route('admin.rekening-3.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
