<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nlrs_about_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('asset', 255)->nullable();
            $table->string('short_description', 255)->nullable();
            $table->string('long_description', 255)->nullable();
            $table->string('box_title', 255)->nullable();
            $table->string('box_description', 255)->nullable();
            $table->string('box_asset', 255)->nullable();
            $table->string('box_link', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nlrs_about_us');
    }
}
