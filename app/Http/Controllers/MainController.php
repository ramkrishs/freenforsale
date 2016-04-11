<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{

    public function login()
    {
        return view('index');
    }

    public function index()
    {
        return view('index');
    }

    public function signup()
    {
        return view('register');
    }
}
