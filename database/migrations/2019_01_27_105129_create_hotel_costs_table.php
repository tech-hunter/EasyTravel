<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_costs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('hotel_id');            
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');

            $table->unsignedInteger('room_cat_id');            
            $table->foreign('room_cat_id')->references('id')->on('room_categories')->onDelete('cascade');

            $table->integer('cost');


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
        Schema::dropIfExists('hotel_costs');
    }
}
