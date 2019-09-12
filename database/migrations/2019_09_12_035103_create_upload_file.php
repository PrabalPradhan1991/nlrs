<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nlrs_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('note')->nullable();
            $table->string('text_1', 255)->nullable();
            $table->string('value_1', 255)->nullable();
            $table->string('text_2', 255)->nullable();
            $table->string('value_2', 255)->nullable();
            $table->string('text_3', 255)->nullable();
            $table->string('value_3', 255)->nullable();
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nlrs_upload');
    }
}
