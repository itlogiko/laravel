<?php

namespace itLogiko\Laravel\Controllers;

use function view;

class WelcomeController extends Controller
{
  public function __invoke()
  {
    return view('itlogiko::pages.welcome');
  }
}
