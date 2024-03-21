<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoogleUser;

class GoogleUserController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->input('email');

        // Check if user with the same email already exists
        $existingUser = GoogleUser::where('email', $email)->first();

        // If user already exists, return the existing user
        if ($existingUser) {
            return response()->json($existingUser, 200);
        }

        // If user doesn't exist, create a new user
        $user = new GoogleUser();
        $user->google_id = $request->input('google_id');
        $user->name = $request->input('name');
        $user->email = $email;
        $user->save();

        return response()->json($user, 201);
    }

    // Other methods can be added as needed, such as for displaying user information
}
