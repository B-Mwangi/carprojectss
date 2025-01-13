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
        Schema::create('collectivetable', function (Blueprint $table) {

            $table->string('VINumber');
            $table->string('CarRegistration')->nullable();
            $table->string('CarMake')->nullable();
            $table->string('CarModel')->nullable();
            $table->string('CarMileage')->nullable();
            $table->string('CheckEngine')->nullable();
            $table->string('Lights')->nullable();
            $table->string('ParkSensor')->nullable();
            $table->string('AirSuspension')->nullable();
            $table->string('AutoTailGate')->nullable();
            $table->string('SlipDifferential')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
