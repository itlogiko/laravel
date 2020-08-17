<?php

namespace itLogiko\Laravel\Controllers;

use itLogiko\Laravel\Requests\LocaleRequest;

class LocaleController extends Controller
{
  public function __invoke(LocaleRequest $request)
  {
    $request->session()->put('locale', $request->input('locale'));
    return redirect()
      ->back()
      ->with('success', 'Switch successful.');
  }
}
