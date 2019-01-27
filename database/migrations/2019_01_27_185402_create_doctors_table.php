<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('hospital_id');            
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');

            $table->string('name');
            $table->string('department');

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
        Schema::dropIfExists('doctors');

        Schema::table("doctors", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
