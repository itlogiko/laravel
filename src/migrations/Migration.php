<?php

namespace itLogiko\Laravel\Migrations;

use Illuminate\Database\Migrations\Migration as BaseMigration;

class Migration extends BaseMigration
{
  /**
   * The db table.
   *
   * @var string
   */
  protected $table;

  /**
   * Initialize migration.
   *
   * @return void
   */
  public function __construct()
  {
    $this->table = config('itlogiko.db.prefix') . $this->table;
  }
}
