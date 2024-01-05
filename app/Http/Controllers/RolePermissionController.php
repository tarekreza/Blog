<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:View Role')->only(['index']);
        $this->middleware('permission:Create Role')->only('create','store');
        $this->middleware('permission:Edit Role')->only('edit','update');
        $this->middleware('permission:Delete Role')->only('destroy');
    }
    public function index()
    {
        //get all roles with permissions
        $roles = Role::with('permissions')->get();
        return view('role-permission.index', compact('roles'));
    }
    //show all roles and permissions
    public function create()
    {
        $permissions = Permission::all()->groupBy('group_name');
        return view('role-permission.create', compact('permissions'));
    }
    //add permission to role
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id',
        ]);
        $permissionIds = $request->input('permissions');
        $permissions = Permission::whereIn('id', $permissionIds)->get();
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($permissions);
        return back()->with('status', 'Permissions added to role successfully');
    }
    //edit role permission
    public function edit(Role $role)
    {
        $permissions = Permission::all()->groupBy('group_name');
        return view('role-permission.edit', compact('role', 'permissions'));
    }
    //update role permission
    public function update(Request $request, Role $role)
    {
        //edit role name and permission
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id',

        ]);
        $permissionIds = $request->input('permissions');
        $permissions = Permission::whereIn('id', $permissionIds)->get();
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($permissions);
        return back()->with('status', 'Role updated successfully');
    }
    //delete role permission
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('status', 'Role deleted successfully');
    }
}
