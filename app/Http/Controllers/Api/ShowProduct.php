<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowProduct extends Controller
{
    //
    public function index(){
        $data= Product::all();
        return response()->json([
            'code'=>200,
            'data'=>$data
        ],200);
    }
}
