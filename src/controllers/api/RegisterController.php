<?php

namespace itLogiko\Laravel\Controllers\Api;

use itLogiko\Laravel\Models\UserModel;
use itLogiko\Laravel\Repositories\RegisterRepository;
use itLogiko\Laravel\Requests\RegisterRequest;

class RegisterController extends Controller
{
  public function __invoke(RegisterRequest $request)
  {
    return $this->json('Registration successful.', 0, [
      'auth' => RegisterRepository::handle($request->validated(), UserModel::class),
    ]);
  }
}
