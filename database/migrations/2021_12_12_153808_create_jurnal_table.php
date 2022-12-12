<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->id();
            $table->string('capaian', 128);
            $table->string('sub_capaian', 128);
            $table->string('alat_bahan', 128)->nullable();
            $table->date('tanggal');
            $table->date('tgl_berakhir');
            $table->text('prosedur')->nullable();
            $table->integer('nilai')->nullable();
            $table->integer('id_user');
            $table->string('status', 20);
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
        Schema::dropIfExists('jurnal');
    }
}
