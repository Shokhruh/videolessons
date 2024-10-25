<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $users = User::all();
        return view('backend.user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', User::class);

        $roles = Role::where('status', '=', 1)->get();
        return view('backend.user.create', [
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('users', 'public');
        }

        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'position' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'role_id' => 'required',
            'status' => 'required',
            'photo' => 'required',
        ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'position' => $request->position,
            'role_id' => $request->role_id,
            'photo' => $path ?? '',
            'status' => $request->status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')->with('message', "Siz o'qituvchini muvaffaqqiyatli tarzda qo'shdingiz!");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);

        return view('backend.user.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);

        $roles = Role::where('status', '=', 1)->get();
        return view('backend.user.edit', [
            'roles' => $roles,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        if ($request->hasFile('photo')) {
            if (!empty($user->photo)) {
                Storage::delete($user->photo);
            }
            $photo = $request->file('photo')->store('users', 'public');
        }

        $oldPassword = $user->password;
        if ($request->password === $oldPassword) {
            $password = $oldPassword;
        } else {
            $password = Hash::make($request->password);
        }


        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'status' => 'required',
        ]);

        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'position' => $request->position,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'photo' => $photo ?? $user->photo,
            'status' => $request->status,
            'password' => $password,
            'tg' => $request->tg,
            'fb' => $request->fb,
            'ins' => $request->ins,
            'ln' => $request->ln,
            'bio' => $request->bio,
        ]);

        return redirect()->route('users.index')->with('message', "Siz o'qituvchini muvaffaqqiyatli tarzda tahrirladingiz!");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        if (!empty($user->photo)) {
            Storage::delete($user->photo);
            $user->delete();
        }

        return redirect()->route('users.index')->with('message', "Siz o'qituvchini muvaffaqqiyatli tarzda o'chirdingiz!");
    }
}
