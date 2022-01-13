<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
//            $table->string('last_name');
            $table->string('address');
            $table->integer('phone');
            $table->string('city_name')->nullable();
            $table->foreignId('building_id')->constrained()->nullable();
            $table->foreignId('gate_id')->constrained()->nullable();
            $table->string('packages')->nullable();
            $table->integer('payment')->nullable();
            $table->integer('mirembajtje13')->nullable();
            $table->integer('mirembajtje14')->nullable();
            $table->integer('mirembajtje15')->nullable();
            $table->integer('mirembajtje10')->nullable();
            $table->integer('internet')->nullable();
            $table->integer('tv')->nullable();
            $table->integer('parking')->nullable();
            $table->boolean('paid')->nullable();
            $table->date('start_month')->nullable();
            $table->date('end_month')->nullable();

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
        Schema::dropIfExists('clients');
    }
}
