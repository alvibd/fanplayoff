<?php
/**
 * Created by PhpStorm.
 * User: Nvisio - Laptop 01
 * Date: 10/29/2017
 * Time: 5:02 PM
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //todo complete social login
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

//        $authUser = $this->findOrCreateUser($user, $provider);

//        Auth::login($authUser, true);
        return redirect($this->redirect()->intended('home'));
    }

    public function findOrCreateUser($user, $provider)
    {
        /*$authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);*/
    }
}