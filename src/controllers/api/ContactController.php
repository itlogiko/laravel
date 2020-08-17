<?php

namespace itLogiko\Laravel\Controllers\Api;

use itLogiko\Laravel\Models\ContactModel;
use itLogiko\Laravel\Requests\ContactRequest;

class ContactController extends Controller
{
  public function __invoke(ContactRequest $request)
  {
    $input = $request->validated();
    $contact = ContactModel::create($input);
    return $this->json('Send successful.', 0, [
      'contact' => $contact,
    ]);
  }
}
