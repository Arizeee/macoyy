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
        Schema::create('pelanggaran', function (Blueprint $table) {
            $table->id();
            $table->text('bentuk_pelanggaran');
            $table->enum('jenis_pelanggaran', ['Keterlambatan','Kehadiran', 'Pakaian Seragam','Kepribadian', 'Ketertiban','Merokok','Pornografi','Senjata Tajam','Narkoba & Minuman Keras', 'Berkelahi / Tawuran', 'Intimidasi / Ancaman dengan Kekerasan']);
            $table->text('sanksi');
            $table->bigInteger('poin');
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
        Schema::dropIfExists('pelanggaran');
    }
};
