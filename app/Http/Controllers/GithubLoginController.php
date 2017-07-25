<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Auth;
use App\SocialAccountService;

class GithubLoginController extends Controller
{
    function githubRedirect()
    {
      return Socialite::driver('github')->redirect();
    }

    function githubCallback(SocialAccountService $socialAccountService)
    {
      $facebookUser = Socialite::driver('github')->user();
      session(['facebookUser' => $facebookUser]);

      $user = $socialAccountService->createOrGetUser($facebookUser);

      Auth::login($user);

      return redirect()->route('home');
    }
}
