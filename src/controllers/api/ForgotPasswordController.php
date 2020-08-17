<?php

namespace itLogiko\Laravel\Controllers\Api;

use itLogiko\Laravel\Repositories\ForgotPasswordRepository;
use itLogiko\Laravel\Requests\ForgotPasswordRequest;

class ForgotPasswordController extends Controller
{
  public function __invoke(ForgotPasswordRequest $request)
  {
    ForgotPasswordRepository::handle($request->validated());
    return $this->json('Send successful.', 0, []);
  }
}
