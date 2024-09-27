<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterApiController extends Controller
{
    public function showLoginForm()
    {
        return view('login');  // Ensure you have the login.blade.php file in resources/views
    }
    public function showSignupForm()
    {
        return view('signup');  // Ensure you have the signup.blade.php file in resources/views
    }

    // Registration
    public function register(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Return error if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Generate the token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Return response with token
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 201);
    }

    // Login
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // Verify the password and check if user exists
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        // Generate the token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Return the token in the response
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }

    // Logout and revoke token
    public function logout(Request $request)
    {
        // Revoke the current token
        $request->user()->currentAccessToken()->delete();

        return response()->json('Logged out', 200);
    }
}
