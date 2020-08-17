<?php

namespace itLogiko\Laravel\Repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use function request;

class LoginRepository
{
  public static function handle($input, $guard = null)
  {
    $auth = Auth::guard($guard);
    $auth->attempt($input, request()->has('remember'));
    $user = $auth->authenticate();
    $user->api_token = Str::random(80);
    $user->update();
    return $user;
  }
}
