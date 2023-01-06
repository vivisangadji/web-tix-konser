<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('tiket_id')->unsigned(); 
            $table->foreign('tiket_id')->references('id')->on('tikets'); 
            $table->string('id_uniq');
            $table->string('nama_pemesan');
            $table->string('email');
            $table->integer('no_telp');
            $table->text('alamat');
            $table->enum('status', ['pending','selesai'])->default('pending');
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
        Schema::dropIfExists('pesanans');
    }
}
