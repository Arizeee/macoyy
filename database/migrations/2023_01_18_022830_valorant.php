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
        Schema::create('valorants', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('foto');
            $table->enum('jeniskelamin', ['laki-laki', 'perempuan']);
            $table->string('rank');
            $table->string('deskripsi');
            $table->rememberToken();
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
        //
    }
};
