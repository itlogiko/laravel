<?php

namespace itLogiko\Laravel\Controllers\Admin;

use function view;

class WelcomeController extends Controller
{
  public function __invoke()
  {
    return view('itlogiko::pages.admin.welcome');
  }
}
