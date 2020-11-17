<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validators', function (Blueprint $table) {
            $table->id();
            $table->string('salesPersonId');
            $table->string('postCode');
            $table->timestamps();
        });

        DB::table('validators')->insert([
            ['salesPersonId' => '1', 'postCode' => '75417'],
            ['salesPersonId' => '1', 'postCode' => '75415'],
            ['salesPersonId' => '3', 'postCode' => '75462'],
            ['salesPersonId' => '1', 'postCode' => '75418'],
            ['salesPersonId' => '4', 'postCode' => '75473'],
            ['salesPersonId' => '1', 'postCode' => '75217'],
            ['salesPersonId' => '3', 'postCode' => '75115'],
            ['salesPersonId' => '1', 'postCode' => '75562'],
            ['salesPersonId' => '2', 'postCode' => '75128'],
            ['salesPersonId' => '2', 'postCode' => '75123']
    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validators');
    }
}
