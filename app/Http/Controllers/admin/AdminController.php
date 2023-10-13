<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admins.admins', ['users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.add_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'min:8|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        User::create($request->all());

        return redirect('admin/admins/create')->with('success', 'User inserted successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.admins.edit_admin', ['user' => User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'min:8|required',
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'User updated successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function changeAdminPassword(string $id)
    {
        return view('admin.admins.change_admin_password', ['user' => User::findOrFail($id)]);
    }

    public function updateAdminPassword(Request $request, string $id)
    {

        $request->validate([
            'password' => 'required|min:8'
        ]);

        $user = User::find($id);
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success', 'User password updated successful');
    }
}
