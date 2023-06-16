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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->string('name');
            $table->string('email');
            $table->string('department');
            $table->string('doctor_name')->nullable();
            $table->string('phone');
            $table->longText('message');
            $table->dateTime('date');
            $table->integer('status')->default(0)
            ->comment('0 = pending, 1 = approved, 2 = rejected');
            $table->integer('user_id');
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
};
