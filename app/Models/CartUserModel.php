<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartUserModel extends Model
{
    //
    protected $guarded=[];
    public function post()
    {
        return $this->hasMany('App\Models\CartProduct','user_id', 'cart_id');
    }
}
