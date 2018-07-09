<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoviesToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movies', function (Blueprint $table) {
            $table->increments('mo_id',10);
            $table->string('mo_name',50);
            $table->string('mo_type',50);
            $table->string('mo_actor',50);
            $table->string('mo_detail');
            $table->string('mo_cost',50);
            $table->string('mo_date',50);
            $table->string('mo_date_end',50);
            $table->string('status',10);


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
        Schema::drop('”Movies”');
    }
}
