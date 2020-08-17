<?php

namespace itLogiko\Laravel\Controllers;

use itLogiko\Laravel\Models\ContactModel;
use itLogiko\Laravel\Requests\ContactRequest;
use function redirect;
use function view;

class ContactController extends Controller
{
  public function form()
  {
    return view('itlogiko::pages.contact');
  }

  public function send(ContactRequest $request)
  {
    $input = $request->validated();
    ContactModel::create($input);
    return redirect()
      ->back()
      ->with('success', 'Send successful.');
  }
}
