<?php

namespace itLogiko\Laravel\Repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterRepository
{
  public static function handle($input, $model, $guard = null)
  {
    $auth = Auth::guard($guard);
    $user = $model::create($input);
    $user->api_token = Str::random(80);
    $user->update();
    $auth->login($user);
    return $user;
  }
}
