<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pelaku_halal_id');
            $table->foreign('pelaku_halal_id')->references('id')->on('pelaku_halal')->onUpdate('cascade')->onDelete('cascade');
            $table->string('photo');
            $table->string('name');
            $table->string('packaging_material');
            $table->text('material');
            $table->text('process_making');
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
        Schema::dropIfExists('produk');
    }
}
