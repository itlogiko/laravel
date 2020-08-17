<?php

namespace itLogiko\Laravel\Requests\Admin;

use itLogiko\Laravel\Models\AdminModel;

class ForgotPasswordRequest extends Request
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
      'email' => 'required|email|max:100|exists:' . AdminModel::class . ',email',
    ];
  }
}
