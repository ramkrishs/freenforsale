<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Hash;
use View;
use Auth;
use Redirect;
use App\Http\Requests;
use App\User;

class AuthController extends Controller
{


    public function getSignup()
    {
        return view('register');
    }

    public function doRegister(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users|max:20',
            'email' => 'required|unique:users|email|max:25',
            'password' => 'required|min:6',
        ]);
        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return redirect()->route('index')->with('info', 'Your account has been created Thanks and you can sign in now ');
    }


    public function getLogin()
    {
        return view('index');
    }

    public function doLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back()->with('danger', 'Could not signin with incorrect password');
        }
        return Redirect::intended('home');

    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('home');

    }
}
