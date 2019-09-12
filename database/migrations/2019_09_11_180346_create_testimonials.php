<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('client', 255)->nullable();
            $table->unsignedInteger('rating')->nullable();
            $table->unsignedInteger('ordering')->nullable();
            $table->text('testimonial')->nullable();
            $table->string('asset', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_testimonials');
    }
}
