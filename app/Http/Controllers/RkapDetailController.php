<?php

namespace App\Http\Controllers;

use App\Models\Rekening1;
use App\Models\Rekening2;
use App\Models\Rekening3;
use App\Models\Bumd;
use App\Models\Rkap;
use App\Models\RkapDetail;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;

class RkapDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rkapId)
    {
        return view('pages.admin.rkap-detail.index', compact('rkapId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($rkapId)
    {
        $model = new RkapDetail();
        $rkap = Rkap::findOrFail($rkapId);
        $rekening3 = Rekening3::where('bumd_id', $rkap->bumd->id)->pluck('nama', 'id');
        return view('pages.admin.rkap-detail.form', compact('model', 'rkap', 'rekening3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $rkapId)
    {
        $this->validate($request, [
            'rekening3_id' => 'required',
            'nilai' => 'required'
        ]);

        $rekening3 = Rekening3::findOrFail($request->rekening3_id);

        $request['rkap_id'] = $rkapId;
        $request['rekening2_id'] = $rekening3->rekening2->id;

        $model = RkapDetail::create($request->all());

        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rkapId, $id)
    {
        $model = RkapDetail::findOrFail($id);
        return view('pages.admin.rkap-detail.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rkapId, $id)
    {
        $model = RkapDetail::findOrFail($id);
        $rkap = Rkap::findOrFail($rkapId);
        $rekening3 = Rekening3::where('bumd_id', $rkap->bumd->id)->pluck('nama', 'id');
        return view('pages.admin.rkap-detail.form', compact('model', 'rkap', 'rekening3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rkapId, $id)
    {
        $this->validate($request, [
            'rekening3_id' => 'required',
            'nilai' => 'required'
        ]);

        $model = RkapDetail::findOrFail($id);

        $rekening3 = Rekening3::findOrFail($request->rekening3_id);

        $request['rkap_id'] = $rkapId;
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
    public function destroy($rkapId, $id)
    {
        $model = RkapDetail::findOrFail($id);
        $model->delete();
    }

    public function report($rkapId)
    {
        $rkap = Rkap::findOrFail($rkapId);
        $lastRkap = Rkap::whereYear('tanggal', Carbon::parse($rkap->tanggal)->subYear()->year)->first();
        $rekening2 = RkapDetail::select('rekening2_id')->where('rkap_id', $rkapId)->distinct('rekening2_id')->get();
        return view('pages.admin.rkap-detail.report', compact('rekening2', 'rkap', 'lastRkap'));
    }

    public function dataTable($id)
    {
        $model = RkapDetail::where('rkap_id', $id)->with(['rekening3']);
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
                    'url_show' => route('admin.rkap.detail.show', [$id, $model->id]),
                    'url_edit' => route('admin.rkap.detail.edit', [$id, $model->id]),
                    'url_destroy' => route('admin.rkap.detail.destroy', [$id, $model->id])
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'detail'])->make(true);
    }
}
