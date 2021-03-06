<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions_history', function (Blueprint $table) {
            $table->increments('id');

            if (!config('app.IS_TOOL')) {
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
            }

            $table->timestamp('occurrence');
            $table->string('module_name');
            $table->unsignedTinyInteger('action');
            $table->string('action_object');
            $table->string('action_msg');
            $table->string('ip_address', 15);
            $table->string('user_agent');

            if (config('app.IS_TOOL')) {
                $table->tinyInteger('status')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions_history');
    }
}




