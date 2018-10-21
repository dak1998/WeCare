<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMartyrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('martyrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('force');
            $table->date('martyr_date');
            $table->string('city');
            $table->integer('family_mems');
            $table->string('photo_path');
            $table->boolean('accepting_status');
            $table->float('total_donations');
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
        Schema::dropIfExists('martyrs');
    }
}
