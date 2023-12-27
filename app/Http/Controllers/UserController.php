<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index()
    {
        // Get all users and pass them to the view
        $users = User::all();
        return view('admin.index', compact('users'), [
            'title' => 'Manage Users',
        ]);
    }

    public function edit($id)
    {
        // Find the user by id
        $user = User::find($id);
        return view('admin.edit', compact('user'), [
            'title' => 'Edit User',
        ]);
    }

    public function update (Request $request, $id): RedirectResponse
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        // Find the user by id
        $user = User::find($id);

        // Update the user
        $user->email = $request->get('email');
        $user->name = $request->get('name');
        $user->role = $request->get('role');
        $user->save();
        
        // Redirect with toastr message
        return redirect()->route('manageusers.index')->with('success', 'User updated successfully');
        
        // Redirect to the users index page and display message
        // Alert::success('Success', 'User updated successfully');
        // return redirect()->route('manageusers.index');
    }
}