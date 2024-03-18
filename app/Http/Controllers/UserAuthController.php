<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\String\b;

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
        $finduser = User::where('provider_id', $user->id)->first();

        if($finduser){
            Auth::login($finduser);
            Session::flash('user', $finduser);
            return redirect(route('home'));

        } else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider_id'=> $user->id,
                'provider_token'=> $user->token,
                'provider_refresh_token'=> $user->refreshToken,
            ]);

            Auth::login($newUser);
            Session::flash('user', $newUser);
            // return Inertia::location('/');
            // blade
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
}
