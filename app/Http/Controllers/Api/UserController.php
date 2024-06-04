<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users = User::orderBy('name', 'asc')->get();
        return response()->json([
            'message'   => 'Berhasil menampilkan data user',
            'data'      => $Users
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'min:8'
            ],
            'password_confirmation' => [
                'required',
                'same:password'
            ],
            'avatar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048'
            ]
        ]);

        // unggah avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');

            $validated['avatar'] = $avatarPath;
        }

        // menambahkan user baru
        $user = User::create($validated);
        return response()->json([
            'message' => 'Berhasil menambahkan user baru',
            'data' => $user
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Users = User::find($id);
        return response()->json([
            'message' => 'berhasil menampilkan detail user',
            'data' => $Users
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi data
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'min:8'
            ],
            'password_confirmation' => [
                'required',
                'same:password'
            ],
            'avatar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048' // 2 mb
            ]
        ]);

        // unggah avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('avatars', 'public');

            $validated['avatar'] = $avatarPath;
        }

        // update data
        $Users = User::find($id);
        $Users->update($validated);

        return response()->json([
            'message' => 'berhasil mengubah data user',
            'data' => $Users
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Users = User::find($id);
        $Users->delete();

        return response()->json([
            'message' => 'berhasil menghapus data user',
            'data' => $Users
        ], 200);
    }
}
