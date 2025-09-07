<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|string|min:6|confirmed',
        ]);
        $user = User::create(
            [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]
        );
        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = auth('api');
        $token = $guard->login($user);
        return $this -> respondWithToken($token);
    }
    public function login()
    {
        $credentials = request(['email', 'password']);

        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = auth('api');

        if (! $token = $guard->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = auth('api');
        $guard->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = auth('api');
        return $this->respondWithToken($guard->refresh());
    }

    protected function respondWithToken($token)
    {
        /** @var \Tymon\JWTAuth\JWTGuard $guard */
        $guard = auth('api');
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $guard->factory()->getTTL() * 60
        ]);
    }
}