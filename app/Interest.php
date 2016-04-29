<?php

namespace App;
use Auth;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\SoftDeletes as SoftDeletes;

class Interest extends Eloquent
{
    use SoftDeletes;

    protected $collection = 'interests';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'product',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ ];


    protected $dates = ['deleted_at'];


    public static function isInterest($prodname)
    {

        $status = false;
        $user = new User();
        $username = Auth::user()->username;
        $isWish = Interest::where(['userName'=>$username,'products'=>$prodname])
            ->whereNull('deleted_at')
            ->first();

        if ($isWish) {

            $status = true;
        }

        return $status;
    }
    public static function productCount($prodname)
    {
        $count = Interest::where(['products'=>$prodname])->count();

        return $count;
    }
}
