<?php

namespace itLogiko\Laravel\Controllers;

use itLogiko\Laravel\Repositories\LoginRepository;
use itLogiko\Laravel\Requests\LoginRequest;
use function redirect;
use function view;

class LoginController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.login');
  }

  public function login(LoginRequest $request)
  {
    LoginRepository::handle($request->validated());
    return redirect()
      ->route($this->routeName . 'welcome')
      ->with('success', 'Login successful.');
  }
}
