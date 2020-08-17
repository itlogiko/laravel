<?php

namespace itLogiko\Laravel\Repositories;

use Exception;
use Illuminate\Support\Facades\Password;

class ResetPasswordRepository
{
  public static function handle($input, $broker = null)
  {
    $password = Password::broker($broker);
    $response = $password->reset($input, function($user, $password) {
      $user->password = $password;
      $user->save();
    });
    if ($response !== $password::PASSWORD_RESET) {
      throw new Exception('Reset unsuccessful');
    }
    return true;
  }
}
