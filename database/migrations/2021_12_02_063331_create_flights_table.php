<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('FlightName');
            $table->string('PersonName');
            $table->string('Ticket_NO')->unique();
            $table->string('Status');
            $table->string('From_Destination');
            $table->string('To_Destination');
            $table->string('Flight_timings');
            $table->string('Arrival_timings');
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
        Schema::dropIfExists('flights');
    }
}
