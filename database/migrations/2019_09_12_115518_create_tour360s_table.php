<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTour360sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour360s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_project');
            $table->string('name_investor');
            $table->string('link');
            $table->string('img_thumb');
            $table->string('status');
            $table->string('version')->nullable();
            $table->string('description');

            $table->integer('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('tour360s');
    }
}
