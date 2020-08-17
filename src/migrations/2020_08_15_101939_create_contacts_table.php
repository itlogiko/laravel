<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use itLogiko\Laravel\Migrations\Migration;

class CreateContactsTable extends Migration
{
  /**
   * The db table.
   *
   * @var string
   */
  protected $table = 'contacts';

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists($this->table);
  }

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->table, function(Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email');
      $table->text('message');
      $table->timestamps();
      $table->softDeletes();
    });
  }
}
