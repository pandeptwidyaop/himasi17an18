<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpbensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upbens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('urut');            
            $table->string('nim', 10);
            $table->string('nama', 255);
            $table->string('telp', 15);
            $table->string('program_studi', 20);
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
        Schema::dropIfExists('upbens');
    }
}
