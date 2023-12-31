<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('admin.index', compact('users'));
    }
}
