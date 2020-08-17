<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
  /**
   * The db table.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table($this->table, function(Blueprint $table) {
      if (Schema::hasColumn($this->table, 'api_token')) {
        $table->dropColumn('api_token');
      }
      if (Schema::hasColumn($this->table, 'deleted_at')) {
        $table->dropSoftDeletes();
      }
    });
  }

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table($this->table, function(Blueprint $table) {
      if (!Schema::hasColumn($this->table, 'api_token')) {
        $table->string('api_token', 80)
          ->after('password')
          ->unique()
          ->nullable()
          ->default(null);
      }
      if (!Schema::hasColumn($this->table, 'deleted_at')) {
        $table->softDeletes();
      }
    });
  }
}
