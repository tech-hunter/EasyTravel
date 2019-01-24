<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->unsignedInteger('state_id');            
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');

            $table->unsignedInteger('room_cat_id');            
            $table->foreign('room_cat_id')->references('id')->on('room_categories')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');

        Schema::table("hotels", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
