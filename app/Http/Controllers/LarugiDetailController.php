<?php

namespace App\Http\Controllers;

use App\Models\Rekening1;
use App\Models\Rekening2;
use App\Models\Rekening3;
use App\Models\Bumd;
use App\Models\Larugi;
use App\Models\LarugiDetail;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;

class LarugiDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($larugiId)
    {
        return view('pages.admin.larugi-detail.index', compact('larugiId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($larugiId)
    {
        $model = new LarugiDetail();
        $larugi = Larugi::findOrFail($larugiId);
        $rekening3 = Rekening3::where('bumd_id', $larugi->bumd->id)->pluck('nama', 'id');
        return view('pages.admin.larugi-detail.form', compact('model', 'larugi', 'rekening3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $larugiId)
    {
        $this->validate($request, [
            'rekening3_id' => 'required',
            'nilai' => 'required'
        ]);

        $rekening3 = Rekening3::findOrFail($request->rekening3_id);

        $request['larugi_id'] = $larugiId;
        $request['rekening2_id'] = $rekening3->rekening2->id;

        $model = LarugiDetail::create($request->all());

        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($larugiId, $id)
    {
        $model = LarugiDetail::findOrFail($id);
        return view('pages.admin.larugi-detail.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($larugiId, $id)
    {
        $model = LarugiDetail::findOrFail($id);
        $larugi = Larugi::findOrFail($larugiId);
        $rekening3 = Rekening3::where('bumd_id', $larugi->bumd->id)->pluck('nama', 'id');
        return view('pages.admin.larugi-detail.form', compact('model', 'larugi', 'rekening3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $larugiId, $id)
    {
        $this->validate($request, [
            'rekening3_id' => 'required',
            'nilai' => 'required'
        ]);

        $model = LarugiDetail::findOrFail($id);

        $rekening3 = Rekening3::findOrFail($request->rekening3_id);

        $request['larugi_id'] = $larugiId;
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
    public function destroy($larugiId, $id)
    {
        $model = LarugiDetail::findOrFail($id);
        $model->delete();
    }

    public function report($larugiId)
    {
        $larugi = Larugi::findOrFail($larugiId);
        $lastLarugi = Larugi::whereMonth('tanggal', Carbon::parse($larugi->tanggal)->subMonth()->month)->first();
        $rekening2 = LarugiDetail::select('rekening2_id')->where('larugi_id', $larugiId)->distinct('rekening2_id')->get();
        return view('pages.admin.larugi-detail.report', compact('rekening2', 'larugi', 'lastLarugi'));
    }

    public function dataTable($id)
    {
        $model = LarugiDetail::where('larugi_id', $id)->with(['rekening3']);
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
                    'url_show' => route('admin.larugi.detail.show', [$id, $model->id]),
                    'url_edit' => route('admin.larugi.detail.edit', [$id, $model->id]),
                    'url_destroy' => route('admin.larugi.detail.destroy', [$id, $model->id])
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'detail'])->make(true);
    }
}
