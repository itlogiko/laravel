<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Repositories\LoginRepository;
use itLogiko\Laravel\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
  public function __invoke(LoginRequest $request)
  {
    return $this->json('Login successful.', 0, [
      'auth' => LoginRepository::handle($request->validated(), 'admin'),
    ]);
  }
}
