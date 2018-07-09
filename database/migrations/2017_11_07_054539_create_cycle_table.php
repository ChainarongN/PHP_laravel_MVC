<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCycleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('CycleDetail', function (Blueprint $table) {
            $table->foreign('cy_id')->references('cy_id')->on('cycle')->onDelete('cascade');
            $table->foreign('ro_id')->references('ro_id')->on('room')->onDelete('cascade');
            $table->foreign('mo_id')->references('mo_id')->on('movies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cycle', function (Blueprint $table) {
            //
        });
    }
}
