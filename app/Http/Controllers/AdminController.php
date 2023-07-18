<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->get();

        return view('admin.user', compact('users'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $user->syncRoles([$request->role]);

        return redirect()->route('users.index')->with('success', 'User role updated successfully');
    }

    public function destroy(User $user, Request $request)
    {

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');

    }
}
