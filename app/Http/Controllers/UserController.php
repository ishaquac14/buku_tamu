<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'npk' => 'required|string|size:6|unique:users,npk',
        ]);

        User::create($request->all());
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'npk' => 'required|string|size:6|unique:users,npk,' . $user->id,
        ]);

        $user->update($request->all());
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
