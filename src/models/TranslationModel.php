<?php

namespace itLogiko\Laravel\Models;

class TranslationModel extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'key',
    'locale',
    'value',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'translations';
}
