<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('init_date');
            $table->dateTime('end_date');
            $table->boolean('canceled');
            $table->string('cancellation_reason')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->string('client_contact');
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('creator_id')->nullable(); // can be created by the client itself

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('worker_id')->references('id')->on('users');
            $table->foreign('creator_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('appointments');
    }
}
