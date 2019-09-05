<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_years')->nullable();
            $table->string('car_makes', 255)->nullable();
            $table->string('car_models', 255)->nullable();
            $table->integer('asking_price')->nullable();
            $table->string('has_title', 255)->nullable();
            $table->string('has_registration', 255)->nullable();
            $table->string('condition', 255)->nullable();
            $table->string('cylinders', 255)->nullable();
            $table->string('transmission', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('image_1', 255)->nullable();
            $table->string('image_2', 255)->nullable();
            $table->string('image_3', 255)->nullable();
            $table->string('image_4', 255)->nullable();
            $table->string('video_link', 255)->nullable();
            $table->string('available', 255)->nullable();
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
        Schema::dropIfExists('cars');
    }
}
