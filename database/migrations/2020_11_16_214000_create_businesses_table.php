<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('txt1');
            $table->bigInteger('txt2');
            $table->bigInteger('txt3');
            $table->bigInteger('txt4');
            $table->bigInteger('txt5');
            $table->bigInteger('txt6');
            $table->bigInteger('txt7');
            $table->bigInteger('txt8');
            $table->bigInteger('txt9');
            $table->bigInteger('txt10');
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
        Schema::dropIfExists('businesses');
    }
}
