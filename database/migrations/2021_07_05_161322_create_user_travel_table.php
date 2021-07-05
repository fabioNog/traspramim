<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_travel', function (Blueprint $table) {
            $table->integer('travel_id')->unsigned();
            $table->foreign('travel_id')->references('id')->on('travel');            
            $table->integer('purchases_id')->unsigned();
            $table->foreign('purchases_id')->references('id')->on('purchases');            
            $table->primary(['travel_id,purchases_id']);
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
        Schema::dropIfExists('user_travel');
    }
}
