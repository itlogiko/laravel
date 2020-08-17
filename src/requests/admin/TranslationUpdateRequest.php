<?php

namespace itLogiko\Laravel\Requests\Admin;

class TranslationUpdateRequest extends Request
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
      'key' => 'filled|string',
      'locale' => 'filled|size:2|alpha',
      'value' => 'filled|string',
    ];
  }
}
