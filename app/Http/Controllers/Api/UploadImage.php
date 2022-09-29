<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Models\ProductsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadImage extends Controller
{
    //
    public function selectImage(ImageRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $path = request()->file('image')->store('public/image');
            $input['name'] = $request->name;
            $input['price'] = $request->price;
            $input['file_path'] = 'storage/' . $path;
            $input['change_discount'] = $request->change_discount;
            dd($input);
            $success = ProductsModel::create($input);
            return response()->json([
                "success" => true,
                "message" => "successfully",
                "data" => $success
            ]);
        }
        if (empty($success)) {
            return response()->json(["Ảnh không hợp lệ"], 401);
        }
       
    }
    public function updateImg($id)
    {
       
    }

}
