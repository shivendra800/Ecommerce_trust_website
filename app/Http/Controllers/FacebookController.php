<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class FacebookController extends Controller
{
    public function loginWithFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFromFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            //check users email if already there
            $is_user =  User::where('email', $user->getEmail())->first();

            if (!$is_user) {
                $saveUser =  User::updateOrCreate(
                    [
                        'facebook_id' => $user->getId()
                    ],
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName() . '@' . $user->getId()),
                    ]
                );
            } else {
                $saveUser =  User::where('email', $user->getEmail())->update([
                    'facebook_id' => $user->getId(),
                ]);

                $saveUser =   User::where('email', $user->getEmail())->first();
            }

            Auth::loginUsingId($saveUser->id);

            return redirect()->route('home');
        } catch (\Throwable $th) {

            throw $th;
        }
    }
}