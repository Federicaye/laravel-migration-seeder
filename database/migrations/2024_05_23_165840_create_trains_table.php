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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->char('company', length: 150);
            $table->char('departure_station', length: 150);
            $table->char('station_of_arrival', length: 150);
            $table->time('departure_time', precision:0)->nullable($value = true);
            $table->time('time_of_arrival', precision:0)->nullable($value = true);
            $table->char('train_code', length: 150)->nullable($value = true);
            $table->unsignedTinyInteger('on_schedule')->default(1);
            $table->unsignedTinyInteger('cancelled')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
