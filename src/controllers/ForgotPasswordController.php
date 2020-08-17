<?php

namespace itLogiko\Laravel\Controllers;

use itLogiko\Laravel\Repositories\ForgotPasswordRepository;
use itLogiko\Laravel\Requests\ForgotPasswordRequest;
use function redirect;
use function view;

class ForgotPasswordController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.forgot-password');
  }

  public function send(ForgotPasswordRequest $request)
  {
    ForgotPasswordRepository::handle($request->validated());
    return redirect()
      ->route($this->routeName . 'welcome')
      ->with('success', 'Send successful.');
  }
}
