<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Repositories\LogoutRepository;

class LogoutController extends Controller
{
  public function __invoke()
  {
    return $this->json('Logout successful.', 0, [
      'auth' => LogoutRepository::handle('admin-api'),
    ]);
  }
}
