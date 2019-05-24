<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemrakarsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemrakarsa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemrakarsa');
            $table->string('no_ktp');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('pemrakarsa');
    }
}
