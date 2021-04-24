<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register (RegisterRequest $request): string
    {
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('first_name'),
            'email' => $request->input('first_name'),
            'password' => Hash::make($request->input('first_name')),
        ]);
        return response($user, Response::HTTP_CREATED);
    }
}
