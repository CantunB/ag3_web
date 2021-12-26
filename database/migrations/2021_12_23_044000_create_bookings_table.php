<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('paterno');
            $table->string('materno')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->integer('country_id')->references('zona')->on('countries');
            $table->integer('state_id')->references('zona')->on('states');
            $table->string('type_service');
            $table->string('origin');
            $table->string('destiny');
            $table->integer('passengers');
            $table->date('date_arrival');
            $table->time('time_arrival');
            $table->string('round_service')->nullable();
            $table->date('date_departure')->nullable();
            $table->time('time_departure')->nullable();
            $table->foreignId('request_unit')->constrained('type_units');
            $table->float('price');
            $table->string('type_payment')->nullable();
            $table->tinyInteger('status_payment')->default('0')->nullable();
            $table->tinyInteger('status_booking')->default('0')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
