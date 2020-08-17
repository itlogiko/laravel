<?php

namespace itLogiko\Laravel\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Model extends BaseModel
{
  use SoftDeletes;

  /**
   * Create a new Eloquent model instance.
   *
   * @param array $attributes
   * @return void
   */
  public function __construct(array $attributes = [])
  {
    $this->setTable(config('itlogiko.db.prefix') . $this->getTable());
    parent::__construct($attributes);
  }

  /**
   * The "booted" method of the model.
   *
   * @return void
   */
  protected static function booted()
  {
    parent::booted();
  }
}
