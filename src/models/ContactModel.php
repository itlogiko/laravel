<?php

namespace itLogiko\Laravel\Models;

class ContactModel extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'email',
    'message',
    'name',
  ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'contacts';
}
