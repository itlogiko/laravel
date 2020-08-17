<?php

namespace itLogiko\Laravel\Controllers\Admin\Api;

use itLogiko\Laravel\Models\ContactModel;
use function view;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return $this->json('Fetch successful.', 0, [
      'contacts' => ContactModel::paginate(10),
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param ContactModel $contact
   * @return \Illuminate\Http\Response
   */
  public function show(ContactModel $contact)
  {
    return $this->json('Fetch successful.', 0, [
      'contact' => $contact,
    ]);
  }
}
