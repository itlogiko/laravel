<?php

namespace itLogiko\Laravel\Controllers\Admin;

use itLogiko\Laravel\Repositories\LoginRepository;
use itLogiko\Laravel\Requests\Admin\LoginRequest;
use function redirect;
use function view;

class LoginController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.admin.login');
  }

  public function login(LoginRequest $request)
  {
    LoginRepository::handle($request->validated(), 'admin');
    return redirect()
      ->route($this->adminRouteName . 'welcome')
      ->with('success', 'Login successful.');
  }
}
