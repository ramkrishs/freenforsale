<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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

    public  function getUser($username)
    {
        $user = User::where('username',$username)->first();

        if(!$user){
            abort(404);
        }
        return view('users.viewProfile')->with('user',$user);

    }

    public function getEdit()
    {
        $user = User::where('username',Auth::user()->username)->first();
        return view('users.editProfile')->with('users',$user);
    }

    public function updateProfile(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);


        if($request->file('image'))
        {
            $image = $request->file('image');
            $filename = Auth::user()->username.'.'.$image->getClientOriginalExtension();
            $path = public_path('images/').$filename;
            Image::make($image->getRealPath())->resize(140,140)->save($path);

            Auth::user()->update([
                'profilepic' => (string)$filename,
                'name' => $request->input('name'),
                'phone'=>$request->input('phone'),
                'address' => $request->input('address'),
            ]);
            return redirect()->route('user.profile')->with('info', 'Your profile details is now updated ');
        }

        Auth::user()->update([
           'name' => $request->input('name'),
           'phone'=>$request->input('phone'),
           'address' => $request->input('address'),
        ]);
        return redirect()->route('user.profile')->with('info', 'Your profile details is now updated ');

    }
}
