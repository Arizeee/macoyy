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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('gambar')->nullable();
            $table->bigInteger('nisn');
            $table->enum('jenis_kelamin', ['Laki-laki','Perempuan']);
            $table->text('alamat');
            $table->string('no_telp');
            $table->unsignedBigInteger('kelas_id')->onDelete('cascade'); 
            $table->foreign('kelas_id')->references('id')->on('kelas')->ditonUpdate('cascade');
            $table->bigInteger('poin')->nullable();
            // $table->unsignedBigInteger('poin_id')->nullable();
            // $table->foreign('poin_id')->references('id')->on('pelanggaran');
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
        Schema::dropIfExists('siswa');
    }
};
