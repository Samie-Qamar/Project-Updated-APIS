<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets_tables', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('FlightName');
            $table->string('Ticket_No')->unique();
            $table->string('status');
            $table->decimal('Flight_Amount');
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
        Schema::dropIfExists('tickets_tables');
    }
}
