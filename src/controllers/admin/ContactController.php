<?php

namespace itLogiko\Laravel\Controllers\Admin;

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
    $contacts = ContactModel::paginate(10);
    return view('itlogiko::pages.admin.contacts.index')
      ->with('contacts', $contacts);
  }

  /**
   * Display the specified resource.
   *
   * @param ContactModel $contact
   * @return \Illuminate\Http\Response
   */
  public function show(ContactModel $contact)
  {
    return view('itlogiko::pages.admin.contacts.show')
      ->with('contact', $contact);
  }
}
