<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{


    public function profile()
    {
        return view('users.profile');
    }
    public function settings()
    {
        return view('users.settings');
    }
}
