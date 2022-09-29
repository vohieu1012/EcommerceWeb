<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\ProductUserRequest;
use App\Models\ProductUsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductUserController extends Controller
{
    //
    protected $product;
    public function __construct()
    {
        $this->product = new ProductUsersModel();
    }
    public function addProduct(ProductUserRequest $productUserRequest)
    {

        $product_name = $productUserRequest->product_name;
        $price = $productUserRequest->price;
        $discount = $productUserRequest->discount;
        $description = $productUserRequest->description;
        $product_id = $productUserRequest->product_id;
        $user_id = $productUserRequest->user('api')->id;

        // 
        if ($productUserRequest->hasFile('image')) {
            // your code here
            $data = $productUserRequest->input('image');
            $photo = $productUserRequest->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/uploads';
            $productUserRequest->file('image')->move($destination, $photo);
        }
        // 
        $data = array('product_name' => $product_name, 'price' => $price, 'discount' => $discount, 'description' => $description, 'product_id' => $product_id, 'image' => $photo, 'user_id' => $user_id);
        $success = $this->product::create($data);
        if (!empty($success)) {
            return response()->json([
                "success" => $success
            ], 202);
        } else {
            return response()->json([
                'error' => 'Không tạo được sản phẩm',
            ], 402);
        }
    }

    public function deleteProduct($id)
    {
        $success  = $this->product::where('product_id', $id)->delete();
        if (!empty($success)) {
            return response()->json([
                "success" => $success
            ]);
        } else {
            return response()->json([
                "error" => "Không xoá được sản phẩm khỏi danh sách"
            ]);
        }
    }
    public function editProduct()
    {
    }
    public function allProduct()
    {
        return $this->product::all();
    }
    public function searchProduct($name)
    {
        $result = $this->product::where('product_name', $name)->get();
      
        if (count($result)) {
            return Response()->json($result);
        } else {
            return response()->json(['Result' => 'No Data not found'], 404);
        }
    }
}
