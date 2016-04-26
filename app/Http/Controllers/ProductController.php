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
        $products = Product::whereNull('deleted_at')->paginate(3);

        return view('products.buy')->with('products',$products);
    }

    public function getProductsByName()
    {
        $products = Product::orderBy('name')->paginate(3);
        return view('products.buy')->with('products',$products);
    }

    public function getProductsByPrice($isDesc)
    {
        if($isDesc)
        {
            $products = Product::orderBy('price','DESC')->paginate(3);
        }
        else
        {
            $products = Product::orderBy('price')->paginate(3);
        }

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

    public function  deleteProduct($prodName){
        $product = Product::where(['name'=>$prodName,'seller'=>Auth::user()->username])
                            ->first();
        if (!$product)
        {
            abort(401);
        }
        $product->delete();

        return redirect()->route('product.view')->with('danger','Your product is now removed');

    }

    public function  restoreProduct($prodName){
        $product = Product::where(['name'=>$prodName,'seller'=>Auth::user()->username])
            ->first();
        if (!$product)
        {
            abort(401);
        }
        $product->restore();

        return redirect()->route('product.view');

    }


    public function listMyProduct()
    {
        $products = Product::where(['seller'=>Auth::user()->username])->get();

        dd($products);
    }


    public function listSoldProduct()
    {
        $products = Product::where(['seller'=>Auth::user()->username])
                            ->whereNotNull('buyer')->get();
        dd($products);

    }
    
}
