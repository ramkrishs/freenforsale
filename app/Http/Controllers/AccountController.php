<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Product;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AccountController extends Controller
{


    public function sold()
    {
        $products = Product::where(['seller'=>Auth::user()->username])
            ->whereNotNull('buyer')->paginate(3);
        return view('account.sold')->with('products',$products);
    }

    public function listMyProduct()
    {
        $products = Product::where(['seller'=>Auth::user()->username])
            ->whereNull('deleted_at')
            ->paginate(3);


//        dd($products);
        return view('products.myproducts')->with('products',$products);
    }

    public function bought()
    {
        $products = Product::where(['buyer'=>Auth::user()->username])
                ->paginate(3);
//        dd($products);
        
        return view('account.bought')->with('products',$products);
    }

    public function getProductByProductName($prodName)
    {
        $product = Product::where('name',$prodName)->first();

        if(!$product){
            abort(404);
        }

        return view('products.editProduct')->with('product',$product);
    }

    public function editProduct(Request $request,$prodName)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
            'category' => 'required',
        ]);

        //dd("validation ok!!");
        $seller = Auth::user()->username;
        if($request->file('image'))
        {
            $image = $request->file('image');
            $filename = $seller.$name.'.'.$image->getClientOriginalExtension();
            $path = public_path('images/').$filename;
            Image::make($image->getRealPath())
                ->resize(250,250,
                    function ($constraint) {
                        $constraint->aspectRatio();
                    })
                ->save($path);
            $product = Product::where('name',$prodName)->first();
            $product->productImg = (string)$filename;
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->description = $request->input('description');
            $product->seller = $seller;
            $product->category = $request->input('category');
            $product->save();
            return redirect()->route('product.myProduct')->with('info', 'Your product details is now updated ');
        }
        $product = Product::where('name',$prodName)->first();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->seller = $seller;
        $product->category = $request->input('category');
        $product->save();
        return redirect()->route('product.myProduct')->with('info', 'Your product details is now updated ');
    }

    public function wishlist()
    {
        return view('account.wishlist');
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
}
