<?php

namespace itLogiko\Laravel\Controllers\Admin;

use itLogiko\Laravel\Repositories\ForgotPasswordRepository;
use itLogiko\Laravel\Requests\Admin\ForgotPasswordRequest;
use function redirect;
use function view;

class ForgotPasswordController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.admin.forgot-password');
  }

  public function send(ForgotPasswordRequest $request)
  {
    ForgotPasswordRepository::handle($request->validated(), 'admins');
    return redirect()
      ->route($this->adminRouteName . 'welcome')
      ->with('success', 'Send successful.');
  }
}
