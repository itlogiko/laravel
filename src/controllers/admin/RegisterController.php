<?php

namespace itLogiko\Laravel\Controllers\Admin;

use itLogiko\Laravel\Models\AdminModel;
use itLogiko\Laravel\Repositories\RegisterRepository;
use itLogiko\Laravel\Requests\Admin\RegisterRequest;
use function redirect;
use function view;

class RegisterController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.admin.register');
  }

  public function register(RegisterRequest $request)
  {
    RegisterRepository::handle($request->validated(), AdminModel::class, 'admin');
    return redirect()
      ->route($this->adminRouteName . 'welcome')
      ->with('success', 'Registration successful.');
  }
}
