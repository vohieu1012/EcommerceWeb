<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartUserModel;
use Illuminate\Http\Request;

class CartUserController extends Controller
{
    //
    protected $cart;
    public function __construct()
    {
        $this->cart= new CartUserModel();
    }
    public function createCart(Request $request){
        
    }
}
