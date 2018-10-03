<?php

namespace App\Http\Controllers;

use App\Models\Rekening1;
use App\Models\Rekening2;
use App\Models\Rekening3;
use App\Models\Bumd;
use App\Models\Neraca;
use DataTables;
use Illuminate\Http\Request;

class NeracaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.neraca.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Neraca();
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.neraca.form', compact('model', 'bumd'));
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
            'judul' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            'bumd_id' => 'required',
        ]);

        $model = Neraca::create($request->all());

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
        $model = Neraca::findOrFail($id);

        return view('pages.admin.neraca.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Neraca::findOrFail($id);
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.neraca.form', compact('model', 'bumd'));
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
            'judul' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
            'bumd_id' => 'required',
        ]);

        $model = Neraca::findOrfail($id);
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
        $model = Neraca::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = Neraca::with('bumd');
        return DataTables::of($model)
            ->addColumn('status', function ($model) {
                return $model->status ? 'Selesai' : 'Belum';
            })
            ->addColumn('tanggal', function ($model) {
                return $model->tanggal->format('d/m/Y');
            })
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.neraca.show', $model->id),
                    'url_edit' => route('admin.neraca.edit', $model->id),
                    'url_destroy' => route('admin.neraca.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
