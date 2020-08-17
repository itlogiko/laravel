<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Models\AdminModel;
use itLogiko\Laravel\Repositories\RegisterRepository;
use itLogiko\Laravel\Requests\Admin\RegisterRequest;

class RegisterController extends Controller
{
  public function __invoke(RegisterRequest $request)
  {
    return $this->json('Registration successful.', 0, [
      'auth' => RegisterRepository::handle($request->validated(), AdminModel::class, 'admin'),
    ]);
  }
}
