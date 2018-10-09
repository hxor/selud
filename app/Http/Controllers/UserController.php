<?php

namespace App\Http\Controllers;

use App\Models\Bumd;
use App\Models\Role;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        $role = Role::pluck('title', 'id')->all();
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.user.form', compact('model', 'role', 'bumd'));
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role_id' => 'required',
            'bumd_id' => 'required'
        ]);

        $request['password'] = bcrypt($request->password);

        $model = User::create($request->all());

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
        $model = User::findOrFail($id);

        return view('pages.admin.user.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::findOrFail($id);
        $role = Role::pluck('title', 'id')->all();
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.user.form', compact('model', 'role', 'bumd'));
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role_id' => 'required',
            'bumd_id' => 'required'
        ]);

        $model = User::findOrFail($id);

        if ($request->password) {
            $request['password'] = bcrypt($request->password);
        } else {
            $request['password'] = $model->password;
        }

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
        $model = User::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = User::with('roles');
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.partials._action', [
                    'model' => $model,
                    'url_show' => route('admin.user.show', $model->id),
                    'url_edit' => route('admin.user.edit', $model->id),
                    'url_destroy' => route('admin.user.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])->make(true);
    }
}
