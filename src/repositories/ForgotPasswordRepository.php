<?php

namespace itLogiko\Laravel\Repositories;

use Exception;
use Illuminate\Support\Facades\Password;

class ForgotPasswordRepository
{
  public static function handle($input, $broker = null)
  {
    $password = Password::broker($broker);
    $response = $password->sendResetLink($input);
    if ($response !== $password::RESET_LINK_SENT) {
      throw new Exception('Send unsuccessful');
    }
    return true;
  }
}
