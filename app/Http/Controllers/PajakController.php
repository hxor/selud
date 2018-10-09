<?php

namespace App\Http\Controllers;

use App\Models\Pajak;
use DataTables;
use Illuminate\Http\Request;

class PajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.pajak.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pajak();
        return view('pages.admin.pajak.form', compact('model'));
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
            'tanggal' => 'required',
            'nilai' => 'required',
            'status' => 'required',
        ]);

        if ($request->status == 1) {
            $pajak = Pajak::where('status',1 )->first();

            if ($pajak) {
                $pajak->update([
                    'status' => 0
                ]);
            }
        }

        $model = Pajak::create($request->all());

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
        $model = Pajak::findOrFail($id);

        return view('pages.admin.pajak.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Pajak::findOrFail($id);

        return view('pages.admin.pajak.form', compact('model'));
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
            'tanggal' => 'required',
            'nilai' => 'required',
            'status' => 'required',
        ]);

        if ($request->status == 1) {
            $pajak = Pajak::where('status',1 )->first();

            if ($pajak) {
                $pajak->update([
                    'status' => 0
                ]);
            }
        }

        $model = Pajak::findOrfail($id);
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
        $model = Pajak::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = Pajak::query();
        return DataTables::of($model)
            ->addColumn('status', function ($model) {
                return $model->status ? 'Digunakan' : 'Tidak';
            })
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.pajak.show', $model->id),
                    'url_edit' => route('admin.pajak.edit', $model->id),
                    'url_destroy' => route('admin.pajak.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
