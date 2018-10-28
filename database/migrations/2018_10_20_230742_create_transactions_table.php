<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trans_id');
            $table->integer('from_uid')->unsigned();
            $table->integer('to_mid')->unsigned();
            $table->date('trans_date');
            $table->float('amount');
            $table->string('status');
            $table->string('message')->default("No Message");
            $table->timestamps();

            $table->foreign('from_uid')->references('id')->on('users');
            $table->foreign('to_mid')->references('id')->on('martyrs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
