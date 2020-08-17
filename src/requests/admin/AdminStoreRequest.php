<?php

namespace itLogiko\Laravel\Requests\Admin;

use itLogiko\Laravel\Models\AdminModel;

class AdminStoreRequest extends Request
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'email' => 'required|email|max:100|unique:' . AdminModel::class . ',email',
      'name' => 'required|string|max:100',
      'password' => 'required|min:6|max:10',
    ];
  }
}
