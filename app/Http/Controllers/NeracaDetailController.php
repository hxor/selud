<?php

namespace App\Http\Controllers;

use App\Models\Rekening1;
use App\Models\Rekening2;
use App\Models\Rekening3;
use App\Models\Bumd;
use App\Models\Neraca;
use App\Models\NeracaDetail;
use DataTables;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NeracaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($neracaId)
    {
        return view('pages.admin.neraca-detail.index', compact('neracaId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($neracaId)
    {
        $model = new NeracaDetail();
        $neraca = Neraca::findOrFail($neracaId);
        $rekening3 = Rekening3::where('bumd_id', $neraca->bumd->id)->pluck('nama', 'id');
        return view('pages.admin.neraca-detail.form', compact('model', 'neraca', 'rekening3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $neracaId)
    {
        $this->validate($request, [
            'rekening3_id' => 'required',
            'nilai' => 'required'
        ]);

        $rekening3 = Rekening3::findOrFail($request->rekening3_id);

        $request['neraca_id'] = $neracaId;
        $request['rekening2_id'] = $rekening3->rekening2->id;

        $model = NeracaDetail::create($request->all());

        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($neracaId, $id)
    {
        $model = NeracaDetail::findOrFail($id);
        return view('pages.admin.neraca-detail.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($neracaId, $id)
    {
        $model = NeracaDetail::findOrFail($id);
        $neraca = Neraca::findOrFail($neracaId);
        $rekening3 = Rekening3::where('bumd_id', $neraca->bumd->id)->pluck('nama', 'id');
        return view('pages.admin.neraca-detail.form', compact('model', 'neraca', 'rekening3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $neracaId, $id)
    {
        $this->validate($request, [
            'rekening3_id' => 'required',
            'nilai' => 'required'
        ]);

        $model = NeracaDetail::findOrFail($id);

        $rekening3 = Rekening3::findOrFail($request->rekening3_id);

        $request['neraca_id'] = $neracaId;
        $request['rekening2_id'] = $rekening3->rekening2->id;

        $model->update($request->all());

        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($neracaId, $id)
    {
        $model = NeracaDetail::findOrFail($id);
        $model->delete();
    }

    public function report($neracaId)
    {
        $neraca = Neraca::findOrFail($neracaId);
        $lastNeraca = Neraca::where('bumd_id', $neraca->bumd_id)->whereMonth('tanggal', Carbon::parse($neraca->tanggal)->subMonth()->month)->first();

        $rekening2 = NeracaDetail::select('rekening2_id')->where('neraca_id', $neracaId)->distinct('rekening2_id')->get();
        return view('pages.admin.neraca-detail.report', compact('rekening2', 'neraca', 'lastNeraca'));
    }

    public function dataTable($id)
    {
        $model = NeracaDetail::where('neraca_id', $id)->with(['rekening3']);
        return DataTables::of($model)
            ->addColumn('kode_rekening', function ($model) {
                return $model->parent->bumd->id . '.' . $model->rekening2->kode . '.' . $model->rekening3->kode;
            })
            ->addColumn('nama_rekening', function ($model) {
                return $model->rekening3->nama;
            })
            ->addColumn('action', function ($model) use ($id) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.neraca.detail.show', [$id, $model->id]),
                    'url_edit' => route('admin.neraca.detail.edit', [$id, $model->id]),
                    'url_destroy' => route('admin.neraca.detail.destroy', [$id, $model->id])
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'detail'])->make(true);
    }
}
