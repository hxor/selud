<?php

namespace App\Http\Controllers;

use App\Models\Bumd;
use DataTables;
use Illuminate\Http\Request;

class BumdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.bumd.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Bumd();
        return view('pages.admin.bumd.form', compact('model'));
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
            'nama' => 'required|string|min:5',
            'email' => 'required|email|unique:bumd,email',
            'telepon' => 'required|max:15',
            'alamat' => 'required|string|max:255'
        ]);

        $model = Bumd::create($request->all());

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
        $model = Bumd::findOrFail($id);

        return view('pages.admin.bumd.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Bumd::findOrFail($id);

        return view('pages.admin.bumd.form', compact('model'));
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
            'nama' => 'required|string|min:5',
            'email' => 'required|email|unique:bumd,email,' . $id,
            'telepon' => 'required|max:15',
            'alamat' => 'required|string|max:255'
        ]);

        $model = Bumd::findOrfail($id);
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
        $model = Bumd::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = Bumd::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.bumd.show', $model->id),
                    'url_edit' => route('admin.bumd.edit', $model->id),
                    'url_destroy' => route('admin.bumd.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
