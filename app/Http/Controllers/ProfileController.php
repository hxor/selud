<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Bumd;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $role = Role::pluck('title', 'id')->all();
        $bumd = Bumd::pluck('nama', 'id')->all();
        return view('pages.admin.profile.index', compact('user', 'role', 'bumd'));
    }

    public function update(Request $request)
    {
        $model = User::findOrFail($request->user()->id);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $model->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $model->id,
        ]);

        if ($request->password) {
            $request['password'] = bcrypt($request->password);
        } else {
            $request['password'] = $model->password;
        }

        $model->update($request->only(['name', 'username', 'email', 'password']));

        return redirect()->route('admin.profile.index');
    }
}
