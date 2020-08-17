<?php

namespace itLogiko\Laravel\Controllers;

use itLogiko\Laravel\Repositories\ResetPasswordRepository;
use itLogiko\Laravel\Requests\ResetPasswordRequest;
use function redirect;
use function view;

class ResetPasswordController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.reset-password');
  }

  public function reset(ResetPasswordRequest $request)
  {
    ResetPasswordRepository::handle($request->validated());
    return redirect()
      ->route($this->routeName . 'welcome')
      ->with('success', 'Reset successful.');
  }
}
