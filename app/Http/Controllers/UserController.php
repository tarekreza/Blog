<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:View User')->only(['index']);
        $this->middleware('permission:Create User')->only('create','store');
        $this->middleware('permission:Edit User')->only('edit','update');
        $this->middleware('permission:Delete User')->only('destroy');
    }
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create',compact('roles'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required | exists:roles,name'
        ]);
        //  Automatically hash the password when store it.
        $user = User::create($validatedData);
        $user->assignRole($request->role);
        return redirect()->route('users.index')->with('status', 'User created successfully');
    }
    //edit user
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.edit',compact('user','roles'));
    }
    //update user
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:users,email,$user->id",
            'password' => 'nullable|min:8',
            'role' => 'required | exists:roles,name'
        ]);
        $user->update($validatedData);
        $user->syncRoles($request->role);
        return redirect()->route('users.index')->with('status', 'User updated successfully');
    }
    //delete user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('status', 'User deleted successfully');
    }
}
