<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMemberToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Member', function (Blueprint $table) {
            $table->increments('me_id',10);
            $table->string('me_fname',50);
            $table->string('me_lname',50);
            $table->string('me_tel',10);
            $table->string('me_email',50)->unigue();
            $table->string('me_user',13);
            $table->string('me_pws',20);
            $table->string('status',1);
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
        Schema::drop('Member”');
    }
}
