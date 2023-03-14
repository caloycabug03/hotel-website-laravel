<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingsteps', function (Blueprint $table) {
            $table->id();
            $table->string('checkinDate')->nullable();
            $table->string('checkoutDate')->nullable();
            $table->string('numAdults')->nullable();
            $table->string('numChildren')->nullable();
            $table->string('numRooms')->nullable();
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
        Schema::dropIfExists('bookingsteps');
    }
};
