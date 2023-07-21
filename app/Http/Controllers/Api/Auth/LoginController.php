<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Wrong credential']
            ]);
        }

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('laravel-api-token')->plainTextToken,
        ]);
    }
}
