<?php

namespace itLogiko\Laravel\Repositories;

use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;

class LogoutRepository
{
  public static function handle($guard = null)
  {
    $auth = Auth::guard($guard);
    $user = $auth->user();
    $user->api_token = null;
    $user->update();
    if ($auth instanceof SessionGuard) {
      $auth->logout();
    }
    return $user;
  }
}
