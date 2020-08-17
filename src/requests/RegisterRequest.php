<?php

namespace itLogiko\Laravel\Requests;

use itLogiko\Laravel\Models\UserModel;

class RegisterRequest extends Request
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
      'email' => 'required|email|max:100|unique:' . UserModel::class . ',email',
      'name' => 'required|string|max:100',
      'password' => 'required|min:6|max:10',
    ];
  }
}