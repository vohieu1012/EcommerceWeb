<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegiterRequest;
use Illuminate\Http\Request;
use App\Repositories\Eloquents\RegisterRepository;

class RegisterController extends Controller
{
    public $regisRepository;
    public function __construct(RegisterRepository $regisRepository)
    {
        $this->regisRepository = $regisRepository;
    }
    public function getUser()
    {
        $data = $this->regisRepository->getAll();
        return response()->json([
            'code' => 200,
            'data' => $data
        ]);
    }
    public function register(RegiterRequest $regisRequest)
    {
        $user_name = $regisRequest->input('user_name');

        $email = $regisRequest->input('email');
        $password = bcrypt($regisRequest->input('password'));
        $cf_password =  bcrypt($regisRequest->input('cf_password'));
        $data = array('user_name' => $user_name, 'email' => $email, 'password' => $password, 'cf_password' => $cf_password);
        $user = $this->regisRepository->create($data);
        // $token = $user->createToken('My Token', ['place-orders'])->plainTextToken;
        $response = [
            'user' => $user,
            // 'token' => $token
        ];
        return  response()->json([
            "response" => $response
        ], 201);
    }
    public function getProduct(Request $registerRequest)
    {
        dd(response()->json([$registerRequest->user('api')]));
        $data = $this->regisRepository->find(1)->post->toArray();
        dd($data);
    }
}
