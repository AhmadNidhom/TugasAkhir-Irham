<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePklTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkl', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_perusahaan');
            $table->integer('id_dosen');
            $table->integer('id_lapang');
            $table->string('id_jurnal');
            $table->string('id_ketuaKelompok');
            $table->timestamps();
        });

        // ekowin
        // dds
        // 
        // table nama mahasiswa | npm | aksi
        //       nidhom         | 21  | detail

        // ket capaian : buat wallpaper
        // sub capaian | tanggal | aksi
        // bfaibweufbi | 12312   | detail

        // semua data
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkl');
    }
}
