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


class ProductController extends Controller
{

    public function buy()
    {
        return view('products.buy');
    }

    public function getProduct()
    {
        return view('products.sell');
    }

    public function postProduct(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required|max:300',
            'category' => 'required',
            'image' => 'required',
        ]);

        $seller = Auth::user()->username;
        if($request->file('image'))
        {
            $image = $request->file('image');
            $name = str_replace(' ', '', $request->input('name'));
            $filename = $seller.$name.'.'.$image->getClientOriginalExtension();
            $path = public_path('images/').$filename;
            Image::make($image->getRealPath())
                ->resize(250,250,
                    function ($constraint) {
                        $constraint->aspectRatio();
                    })
                ->save($path);
        }
        $product = new Product;
        $product->productImg = (string)$filename;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->seller = $seller;
        $product->category = $request->input('category');
        $product->save();
        return redirect()->route('product.view')->with('info', 'Your product details is now added ');

    }
               
    public function getProducts()
    {
        $products = Product::whereNull('deleted_at')
                    ->whereNull('buyer')
                    ->where('seller','!=',Auth::user()->username)
                    ->paginate(3);

        return view('products.buy')->with('products',$products);
    }

    public function getProductsByName()
    {
        $products = Product::orderBy('name')
                        ->whereNull('deleted_at')
                        ->where('seller','!=',Auth::user()->username)
                        ->paginate(3);
        return view('products.buy')->with('products',$products);
    }
    public function getProductsByNameinDesc()
    {
        $products = Product::orderBy('name','DESC')
                            ->whereNull('deleted_at')
                            ->where('seller','!=',Auth::user()->username)
                            ->paginate(3);
        return view('products.buy')->with('products',$products);
    }

    public function getProductsByPriceinDesc()
    {
        $products = Product::orderBy('price','DESC')
            ->whereNull('deleted_at')
            ->where('seller','!=',Auth::user()->username)
            ->paginate(3);
//        dd($products->price);
        return view('products.buy')->with('products',$products);
    }
    public function getProductsByPrice()
    {
        $products = Product::orderBy('price')
            ->whereNull('deleted_at')
            ->where('seller','!=',Auth::user()->username)
            ->paginate(3);
        return view('products.buy')->with('products',$products);
    }


    public function  getProductByProductName($prodName)
    {
        $product = Product::where('name',$prodName)->first();

        if(!$product){
            abort(404);
        }
        dd($product);
//        return view('users.viewProfile')->with('user',$user);
    }

    


    


    public function listSoldProduct()
    {
        $products = Product::where(['seller'=>Auth::user()->username])
                            ->whereNotNull('buyer')->get();
        dd($products);

    }
    
}
