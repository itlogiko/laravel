<?php

namespace itLogiko\Laravel\Requests\Admin;

use Illuminate\Support\Facades\Auth;
use itLogiko\Laravel\Models\AdminModel;

class AdminUpdateRequest extends Request
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
      'email' => 'filled|email|max:100|unique:' . AdminModel::class . ',email,' . Auth::guard('admin-api')->id() . ',id',
      'name' => 'required|string|max:100',
      'password' => 'required|min:6|max:10',
    ];
  }
}
