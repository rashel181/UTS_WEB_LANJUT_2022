<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_barang', function (Blueprint $table) {
            $table->increments('id_review');
            $table->integer('id_barang');
            $table->text('deskripsi_barang');
            $table->string('reviewer_name');
            $table->text('review');
            $table->timestamp('waktu_review')->useCurrent;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_barang');
    }
};
