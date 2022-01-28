<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

class JWTAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register','refresh']]);
    }

     public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|between:2,100',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|confirmed|string|min:6',
        ]);

        $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = $this->guard()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }

     public function profile()
    {
       // return auth('api')->check();
        return response()->json($this->guard()->user());
    }

    public function logout()
    {

        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
     public function refresh()
    {

       // return response()->json([$this->guard()->refresh(),auth()->user()]);
        return $this->createNewToken($this->guard()->refresh());
       
    }
     protected function createNewToken($token)
    {
        // return auth()->user();
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 20,
            'user'=>auth('api')->user() 
          ]);
    }

     public function guard()
    {
        return Auth::guard('api');
    }
}
