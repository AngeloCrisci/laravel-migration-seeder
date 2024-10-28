<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company")->nullable(false);
            $table->string("station_departure")->nullable(false);
            $table->string("station_arrival")->nullable(false);
            $table->time("time_of_the_departure")->nullable(false);
            $table->date("day_of_the_departure")->nullable(false);
            $table->time("time_of_the_arrival")->nullable(false);
            $table->date("day_of_the_arrival")->nullable(false);
            $table->string("train_code" , 15)->unique()->nullable(false);
            $table->tinyInteger("wagons")->unsigned()->nullable(false);
            $table->boolean("on_time")->default(true)->nullable(false);
            $table->boolean("suspended")->default(false)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
