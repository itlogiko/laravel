<?php

namespace itLogiko\Laravel\Controllers;

use itLogiko\Laravel\Models\UserModel;
use itLogiko\Laravel\Repositories\RegisterRepository;
use itLogiko\Laravel\Requests\RegisterRequest;
use function redirect;
use function view;

class RegisterController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.register');
  }

  public function register(RegisterRequest $request)
  {
    RegisterRepository::handle($request->validated(), UserModel::class);
    return redirect()
      ->route($this->routeName . 'welcome')
      ->with('success', 'Registration successful.');
  }
}
