<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if (Auth::attempt([
            "email" => $request->email,
            "password" => $request->password,
        ])) {
            //$this->generateToken(Auth::user());

            $user = Auth::user();
            $success["accessToken"] = $user->createToken("LaravelSanctumAuth")->plainTextToken;
            $success["userData"] = new UserResource($user);
            return $this->handleResponse($success, "Utilisateur connecté avec success");

        } else {
            return $this->handleError("Non Autorisé. Attention!", ['error' => "Mauvais identifants"], 200);
        }
    }
}
