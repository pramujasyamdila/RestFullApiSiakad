<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFormulirs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->date('tempat_lahir');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->text('alamat_lengkap');
            $table->string('no_ktp');
            $table->string('no_telpon');
            $table->string('email');
            $table->string('foto_terbaru');
            $table->string('file');
            $table->string('kewarganegaraan');
            $table->string('asal_sekolah');
            $table->string('no_daftar');
            $table->string('hasil_test');
            $table->string('keterangan');
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
        Schema::dropIfExists('formulirs');
    }
}
