<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Repositories\ForgotPasswordRepository;
use itLogiko\Laravel\Requests\Admin\ForgotPasswordRequest;

class ForgotPasswordController extends Controller
{
  public function __invoke(ForgotPasswordRequest $request)
  {
    ForgotPasswordRepository::handle($request->validated(), 'admins');
    return $this->json('Send successful.', 0, []);
  }
}
