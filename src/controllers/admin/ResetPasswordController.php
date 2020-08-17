<?php

namespace itLogiko\Laravel\Controllers\Admin;

use itLogiko\Laravel\Repositories\ResetPasswordRepository;
use itLogiko\Laravel\Requests\Admin\ResetPasswordRequest;
use function redirect;
use function view;

class ResetPasswordController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.admin.reset-password');
  }

  public function reset(ResetPasswordRequest $request)
  {
    ResetPasswordRepository::handle($request->validated(), 'admins');
    return redirect()
      ->route($this->adminRouteName . 'welcome')
      ->with('success', 'Reset successful.');
  }
}
