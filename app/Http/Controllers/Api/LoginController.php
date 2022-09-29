<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\RegisterModel;
use App\Models\SessionUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function create(LoginRequest $loginRequest)
    {
        $Date =  date('Y-m-d');
        $login = [
            'email' => $loginRequest->email,
            'password' => $loginRequest->password,
        ];
        // dd($this->profileRepository->getAll()->find(1)->post->toArray());
        if (Auth::attempt($login)) {

            // $user_check = SessionUser::where('user_id', auth()->id())->first();

            // if (empty($user_check)) {
            //     $userSession = SessionUser::create(
            //         [
            //             'token' => md5(uniqid(rand(), true)),
            //             'refresh_token' => md5(uniqid(rand(), true)),
            //             'token_expried' => date('Y-m-d', strtotime($Date . ' + 30 days')),
            //             'user_id' => auth()->id()
            //         ]
            //     );
            // } else {
            //     $userSession = $user_check;

            // }
            $user = RegisterModel::whereEmail($loginRequest->email)->first();

            $user->token = $user->createToken('Token Name')->accessToken;
            return response()->json([
                'code' => 200,
                // 'data' => $userSession
                'user' => $user,


            ]);
        } else {
            return response()->json([
                'err' => "Sai email hoặc mật khẩu",
            ], 401);
        }
    }
    public function refreshToken()
    {

        $Date = date('Y-m-d');
        $headers = apache_request_headers();
        $token = $headers['token'];
        $checkTokenIsvalid = SessionUser::where('token', $token)->first();
        if (!empty($checkTokenIsvalid)) {
            if ($checkTokenIsvalid->token_expried < $Date) {
                $checkTokenIsvalid->update([
                    'token' => md5(uniqid(rand(), true)),
                    'refresh_token' => md5(uniqid(rand(), true)),
                    'token_expried' => date('Y-m-d', strtotime($Date . ' + 30 days')),
                ]);
            }
        }

        $sessionUser = SessionUser::find($checkTokenIsvalid->id);
        return response()->json([
            'code' => 401,
            'data' => $sessionUser,
            'message' => 'refresh token thành công'
        ], 201);
    }
    public function userInfo(Request $loginRequest)
    {
        return response()->json([$loginRequest->user('api')]);
        // response user api
    }
}
