<?php

namespace itLogiko\Laravel\Controllers;

use itLogiko\Laravel\Repositories\LogoutRepository;
use function redirect;

class LogoutController extends Controller
{
  public function __invoke()
  {
    LogoutRepository::handle();
    return redirect()
      ->route($this->routeName . 'welcome')
      ->with('success', 'Logout successful.');
  }
}
