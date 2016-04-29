<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class SearchController extends Controller
{

    public function getProductsByKeyword(Request $request){

       $search = Product::where('name',$request->input('query'))->paginate(3);

       return view('products.buy')->with('products',$search);

    }

    public function getProductsByCategory($category){

        $search = Product::where('category',$category)
                    ->whereNull('deleted_at')
                    ->where('seller','!=',Auth::user()->username)
                    ->paginate(3);

        return view('products.buy')->with('products',$search);

    }
    
}
