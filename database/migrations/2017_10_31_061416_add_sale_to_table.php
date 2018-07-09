<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSaleToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sale', function (Blueprint $table) {
            $table->increments('sa_id',10);
            $table->string('sa_date',50);
            $table->string('sa_date_clash',50);
            $table->string('sa_status',1);
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
        Schema::drop('”Sale”');
    }
}
