<?php

namespace itLogiko\Laravel\Controllers\Admin;

use itLogiko\Laravel\Repositories\LogoutRepository;
use function redirect;

class LogoutController extends Controller
{
  public function __invoke()
  {
    LogoutRepository::handle('admin');
    return redirect()
      ->route($this->adminRouteName . 'welcome')
      ->with('success', 'Logout successful.');
  }
}
