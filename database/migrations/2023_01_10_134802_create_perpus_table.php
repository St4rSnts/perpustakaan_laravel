<?php

use Carbon\Traits\Timestamp;
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
        Schema::create('perpus', function (Blueprint $table) {
            // secara default laravel akan membuatkan 2 kolom disini ada id dan Timestamp
            // lalu sy menambahkan kolom kolom yang dibutuhkan, tambahkan nullable jika kolomnya
            // boleh dikosongkan oleh user
            $table->id();
            $table->string('nama');
            $table->string('kode')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->string('judul')->nullable();
            $table->string('tgl_pendaftaran')->nullable();
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
        Schema::dropIfExists('perpus');
    }
};