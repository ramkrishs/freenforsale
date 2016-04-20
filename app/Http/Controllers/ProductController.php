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
            'name' => 'required|alpha|max:255',
            'price' => 'required|numeric',
            'description' => 'required|max:300',
            'category' => 'required',
            'image' => 'required',
        ]);

        $seller = Auth::user()->username;
        if($request->file('image'))
        {
            $image = $request->file('image');
            $filename = $seller.$request->input('name').'.'.$image->getClientOriginalExtension();
            $path = public_path('images/').$filename;
            Image::make($image->getRealPath())
                ->resize(300,300,
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
        $product->save();
        return redirect()->route('product.view')->with('info', 'Your product details is now added ');
        
    }

    public function getProducts()
    {
        $products = Product::all();

        return view('products.buy')->with('products',$products);
    }
}
