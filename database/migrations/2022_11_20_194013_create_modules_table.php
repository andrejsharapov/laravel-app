<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('modules', function (Blueprint $table) {
      $table->id();
      $table->string('label')->unique()->index();
      $table->string('path')->unique();
      $table->string('icon')->default('bi bi-dot');
      $table->string('caption');
      $table->string('content')->unique();
      $table->boolean('blank')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('modules');
  }
}
