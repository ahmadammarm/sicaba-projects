<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\QueryException;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;

class UserAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('email', $user->email)->first();

            if($finduser){
                Auth::login($finduser);
                Session::flash('user', $finduser);
                return redirect(route('home'));
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider_id'=> $user->id,
                    'provider_token'=> $user->token,
                    'provider_refresh_token'=> $user->refreshToken,
                ]);

                Auth::login($newUser);
                Session::flash('user', $newUser);
                return redirect(route('home'));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Session::regenerate();

        return redirect('/');
    }

    // Login menggunakan Google
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
            ]);

            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            // Redirect or send success message
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle duplicate entry error
            if ($e->getCode() == '23000') {
                return redirect()->back()->withInput()->withErrors(['email' => 'Email sudah digunakan.']);
            } else {
                // Handle other errors
            }
        }
    }
}
