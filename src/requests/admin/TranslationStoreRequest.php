<?php

namespace itLogiko\Laravel\Requests\Admin;

class TranslationStoreRequest extends Request
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
      'key' => 'required|string',
      'locale' => 'required|size:2|alpha',
      'value' => 'required|string',
    ];
  }
}
