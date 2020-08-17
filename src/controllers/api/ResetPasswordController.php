<?php

namespace itLogiko\Laravel\Controllers\Api;

use itLogiko\Laravel\Repositories\ResetPasswordRepository;
use itLogiko\Laravel\Requests\ResetPasswordRequest;

class ResetPasswordController extends Controller
{
  public function __invoke(ResetPasswordRequest $request)
  {
    ResetPasswordRepository::handle($request->validated());
    return $this->json('Reset successful.', 0, []);
  }
}
