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

    public function getSignup()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }
    
    public function buy()
    {
        return view('products.buy');
    }
    public function sell()
    {
        return view('products.sell');
    }
    public function profile()
    {
        return view('users.profile');
    }
    public function settings()
    {
        return view('users.settings');
    }
}
