<?php

namespace App\Http\Controllers;

use App\Models\Rekening1;
use App\Models\Rekening2;
use App\Models\Rekening3;
use App\Models\Bumd;
use App\Models\Rkap;
use DataTables;
use Illuminate\Http\Request;

class RkapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.rkap.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Rkap();
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.rkap.form', compact('model', 'bumd'));
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

        $model = Rkap::create($request->all());

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
        $model = Rkap::findOrFail($id);

        return view('pages.admin.rkap.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Rkap::findOrFail($id);
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.rkap.form', compact('model', 'bumd'));
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

        $model = Rkap::findOrfail($id);
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
        $model = Rkap::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = Rkap::with('bumd');
        return DataTables::of($model)
            ->addColumn('status', function ($model) {
                return $model->status ? 'Selesai' : 'Belum';
            })
            ->addColumn('tanggal', function ($model) {
                return $model->tanggal->format('d/m/Y');
            })
            ->addColumn('detail', function ($model) {
                return '<a href="' . route('admin.rkap.detail.index', $model->id) . '" class="btn btn-xs btn-primary">Detail</a>';
            })
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.rkap.show', $model->id),
                    'url_edit' => route('admin.rkap.edit', $model->id),
                    'url_destroy' => route('admin.rkap.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'detail'])->make(true);
    }
}
