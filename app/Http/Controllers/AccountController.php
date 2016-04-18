<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{


    public function sold()
    {
        return view('account.sold');
    }

    public function bought()
    {
        return view('account.bought');
    }

    public function wishlist()
    {
        return view('account.wishlist');
    }
}
