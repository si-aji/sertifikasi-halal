<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pelaku_halal_id');
            $table->foreign('pelaku_halal_id')->references('id')->on('pelaku_halal')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->text('address');
            $table->string('category');
            $table->string('nib')->nullable();
            $table->string('bahan_cleaning_agent');
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
        Schema::dropIfExists('usaha');
    }
}
