<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->unsignedBigInteger("id", false);
            $table->primary("id");
            $table->foreign('id')->references('id')->on('users');
            $table->string("photo_path");
            $table->date("hire_date");
            $table->integer("total_rides");
            $table->string("bank_acount", 20);
            $table->string("rating");
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
        Schema::dropIfExists('drivers');
    }
}
