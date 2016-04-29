<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class Product extends Eloquent
{
    use SoftDeletes;

    protected $collection = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price','description', 'isWish', 'seller', 'buyer','category','productImg'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $casts = [
        'price' => 'integer'
    ];
    protected $hidden = [ ];


    protected $dates = ['deleted_at'];

    public static function isSold($productName)
    {
        $status = false;
        $product = Product::where('name',$productName)->first();
        if ($product->buyer)
        {
            $status = true;
        }

        return $status;
    }
    public static function productExist($productName)
    {
        $status = false;
        $product = Product::whereNull('deleted_at')->where('name',$productName)->first();
        if ($product)
        {
            $status = true;
        }

        return $status;
    }


    
}
