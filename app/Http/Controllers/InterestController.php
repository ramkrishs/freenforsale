<?php

namespace App\Http\Controllers;

use App\Interest;
use App\User;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class InterestController extends Controller
{
    public function addInterest($prodname){


        $inter = Interest::where(['products'=>$prodname,'userName'=>Auth::user()->username])
            ->first();

        if($inter){

            $inter->restore();
        }
        else{
            $interests= new Interest();
            $interests->userName=Auth::user()->username;
            $interests->products=$prodname;
            $interests->save();
        }


        return redirect()->back();
    }

    public function remove($prodname)
    {

        $interest = Interest::where(['products'=>$prodname,'userName'=>Auth::user()->username])
            ->first();
        if (!$interest)
        {
            abort(401);
        }
        $interest->delete();

        return redirect()->back();
    }

    
    
    public function showInterest($prodname)
    {
        $users = Interest::where('products',$prodname)
            ->whereNull('deleted_at')
            ->get();

        $uarr=array();
        $userdetails=array();
        foreach ($users as $user) {
            array_push($uarr, $user->userName);
        }
        $product = Product::where('name',$prodname)->first();
        
        
        foreach ($uarr as $u)
        {
            $use =User::where('username',$u)->first();
            array_push($userdetails,$use);

        }


        return view('account.interestShown')->with('users',$userdetails)->with('product',$product);

    }

}
