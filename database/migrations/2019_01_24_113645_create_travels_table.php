<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('name', 20);
            $table->date('birthday');
            $table->string('email');
            $table->string('mobile', 15);
            $table->string('blood_group', 5);
            $table->string('present_address');
            $table->integer('traveler_number');
            $table->string('passport_number');

            $table->unsignedInteger('from');            
            $table->foreign('from')->references('id')->on('states')->onDelete('cascade');

            $table->unsignedInteger('to');

            $table->integer('at_number')->nullable();
            
            $table->unsignedInteger('at_class')->nullable();            
            $table->foreign('at_class')->references('id')->on('ticket_classes')->onDelete('cascade');

            $table->integer('tt_number')->nullable();
            
            $table->unsignedInteger('tt_class')->nullable();            
            $table->foreign('tt_class')->references('id')->on('ticket_classes')->onDelete('cascade');

            $table->unsignedInteger('roomtype')->nullable();
            $table->foreign('roomtype')->references('id')->on('room_categories')->onDelete('cascade');
            

            $table->unsignedInteger('hotel_id')->nullable();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');

            $table->integer('needed_room')->nullable();
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();

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
        Schema::dropIfExists('travels');

        Schema::table("travels", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
