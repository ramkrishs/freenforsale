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

    public function getProductsByCategory(Request $request ){
        
        $all = $request->input('All');
        $search ='';
        
        
        if(!$all) {
            $Electronics = $request->input('Electronics');
            $HomeCare = $request->input('HomeCare');
            $Furniture = $request->input('Furniture');
            $PersonalCare = $request->input('PersonalCare');
            $Vehicle = $request->input('Vehicle');
            $Sports = $request->input('Sports');
            $category = array();

            if ($Electronics) {
                array_push($category, 'Electronics');
            }
            if ($HomeCare) {
                array_push($category, 'HomeCare');
            }
            if ($Furniture) {
                array_push($category, 'Furniture');
            }
            if ($PersonalCare) {
                array_push($category, 'PersonalCare');
            }
            if ($Vehicle) {
                array_push($category, 'Vehicle');
            }
            if ($Sports) {
                array_push($category, 'Sports');
            }
           # dd($category);
            $search = Product::whereIn('category',$category)
                ->whereNull('deleted_at')
                ->where('seller','!=',Auth::user()->username)
                ->paginate(3);

            return view('products.buy')->with('products',$search);

        }
        

        $search = Product::whereNull('deleted_at')
                    ->where('seller','!=',Auth::user()->username)
                    ->paginate(3);

        return view('products.buy')->with('products',$search);

    }


    public function getProductsByName(Request $request)
    {

        $name = $request->input('query');$name = $request->input('query');
        if(!$name)
        {
            $edname ="/.*/";

        }
        else{
            $edname = "/.*" . $name . '.*/';
        }
        $search = Product::where('name', 'regexp',($edname))->paginate(3);
        return view('products.buy')->with('products',$search);

    }

    public function getProductsByCombination(Request $request)
    {
        $name = $request->input('query');
        if(!$name)
        {
            $edname ="/.*/";

        }
        else{
        $edname = "/.*" . $name . '.*/';
        }
        $all = $request->input('All');
        $min = $request->input('min_price');
        $max = $request->input('max_price');
        $search ='';


        if(!$all ) {
            $Electronics = $request->input('Electronics');
            $HomeCare = $request->input('HomeCare');
            $Furniture = $request->input('Furniture');
            $PersonalCare = $request->input('PersonalCare');
            $Vehicle = $request->input('Vehicle');
            $Sports = $request->input('Sports');
            $category = array();

            if ($Electronics) {
                array_push($category, 'Electronics');
            }
            if ($HomeCare) {
                array_push($category, 'HomeCare');
            }
            if ($Furniture) {
                array_push($category, 'Furniture');
            }
            if ($PersonalCare) {
                array_push($category, 'PersonalCare');
            }
            if ($Vehicle) {
                array_push($category, 'Vehicle');
            }
            if ($Sports) {
                array_push($category, 'Sports');
            }
            # dd($category);

            if(!$min And  !$max)
            {

                $search = Product::whereIn('category', $category)
                    ->whereNull('deleted_at')
                    ->where('name', 'regexp',($edname))
                    ->where('seller', '!=', Auth::user()->username)
                    ->paginate(3);
            }
            elseif(!$min)
            {
                $search = Product::whereIn('category', $category)
                    ->whereNull('deleted_at')
                    ->where('name', 'regexp',($edname))
                    ->where('price', "<",$max)
                    ->where('seller', '!=', Auth::user()->username)
                    ->paginate(3);
            }
            elseif(!$max)
            {
                $search = Product::whereIn('category', $category)
                    ->whereNull('deleted_at')
                    ->where('name', 'regexp',($edname))
                    ->whereBetween('price', ">",$min)
                    ->where('seller', '!=', Auth::user()->username)
                    ->paginate(3);
            }


            else{
            $search = Product::whereIn('category', $category)
                ->whereNull('deleted_at')
                ->where('name', 'regexp',($edname))
                ->whereBetween('price', [$min,$max])
                ->where('seller', '!=', Auth::user()->username)
                ->paginate(3);
            }


            return view('products.buy')->with('products', $search);
        }

        if(!$min And !$max)
        {

            $search = Product::whereNull('deleted_at')
                ->where('name', 'regexp',($edname))
                ->where('seller', '!=', Auth::user()->username)
                ->paginate(3);
            return view('products.buy')->with('products', $search);
        }
        elseif(!$min)
        {
            $search = Product::whereNull('deleted_at')
                ->where('name', 'regexp',($edname))
                ->where('price', "<",$max)
                ->where('seller', '!=', Auth::user()->username)
                ->paginate(3);
            return view('products.buy')->with('products', $search);
        }
        elseif(!$max)
        {
            $search = Product::whereNull('deleted_at')
                ->where('name', 'regexp',($edname))
                ->whereBetween('price', ">",$min)
                ->where('seller', '!=', Auth::user()->username)
                ->paginate(3);
            return view('products.buy')->with('products', $search);
        }
        else{
        $search = Product::whereNull('deleted_at')
            ->where('name', 'regexp',($edname))
            ->whereBetween('price', [$min,$max])
            ->where('seller', '!=', Auth::user()->username)
            ->paginate(3);
            return view('products.buy')->with('products', $search);
        }



    }
    
    
    public function getProductByRange(Request $request)
    {
        $min = $request->input('min_price');
        $max = $request->input('max_price');
        $search = Product::whereBetween('price', [$min,$max])->paginate(3);
        return view('products.buy')->with('products',$search);


    }
    
}
