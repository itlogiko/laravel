<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use itLogiko\Laravel\Migrations\Migration;

class CreateAdminsTable extends Migration
{
  /**
   * The db table.
   *
   * @var string
   */
  protected $table = 'admins';

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
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')
        ->nullable();
      $table->string('password');
      $table->string('api_token', 80)
        ->unique()
        ->nullable()
        ->default(null);
      $table->rememberToken();
      $table->timestamps();
      $table->softDeletes();
    });
  }
}
