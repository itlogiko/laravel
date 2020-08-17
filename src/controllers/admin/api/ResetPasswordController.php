<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Repositories\ResetPasswordRepository;
use itLogiko\Laravel\Requests\Admin\ResetPasswordRequest;

class ResetPasswordController extends Controller
{
  public function __invoke(ResetPasswordRequest $request)
  {
    ResetPasswordRepository::handle($request->validated(), 'admins');
    return $this->json('Reset successful.', 0, []);
  }
}
