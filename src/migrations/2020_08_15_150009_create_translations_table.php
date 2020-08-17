<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use itLogiko\Laravel\Migrations\Migration;

class CreateTranslationsTable extends Migration
{
  /**
   * The db table.
   *
   * @var string
   */
  protected $table = 'translations';

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
      $table->string('locale');
      $table->text('key');
      $table->text('value')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }
}
