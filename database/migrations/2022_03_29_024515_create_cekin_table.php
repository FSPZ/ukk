<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cekin', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->string('tgl_in');
            $table->string('tgl_out');
            $table->string('jmlh_kmr');
            $table->string('nama_pemesan');
            $table->string('no_telp');
            $table->string('email');
            $table->string('tipe');
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
        Schema::dropIfExists('cekin');
    }
}
