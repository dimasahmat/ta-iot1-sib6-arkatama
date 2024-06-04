<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    // bisa berisikan
    // index, store, update, destroy
    // show, create, edit

    function index()
    {
        $data['title'] = 'User';
        $data['breadcrumbs'][] = [
            'title' => 'Dashboard',
            'url' => route('dashboard')
        ];
        $data['title'] = 'User';
        $data['breadcrumbs'][] = [
            'title' => 'Users',
            'url' => 'users.index'
        ];

        $users = User::orderBy('name')->get();
        $data['users'] = $users;

        return view('pages.user.index', $data);
    }
}
