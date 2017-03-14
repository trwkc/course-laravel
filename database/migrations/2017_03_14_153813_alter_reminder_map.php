<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterReminderMap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reminder', function (Blueprint $table) {
            $table->integer('reminderType')->unsigned()->nullable();
            $table->foreign('reminderType')->references('id')->on('reminderType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reminder', function (Blueprint $table) {
            //
        });
    }
}
