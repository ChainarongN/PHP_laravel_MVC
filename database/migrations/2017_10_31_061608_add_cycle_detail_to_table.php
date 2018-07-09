<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCycleDetailToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CycleDetail', function (Blueprint $table) {
            $table->increments('cd_id')->unsigned();
            $table->integer('cy_id')->unsigned();
            $table->integer('ro_id')->unsigned();
            $table->integer('mo_id')->unsigned();
            $table->date('cy_date');
//            $table->primary(['cy_id']);
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
        Schema::drop('”CycleDetail”');
    }
}
