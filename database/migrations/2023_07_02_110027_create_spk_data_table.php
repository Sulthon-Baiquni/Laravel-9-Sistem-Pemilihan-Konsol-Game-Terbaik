<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spk_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_pemilihan');
            $table->string('harga_bobot');
            $table->string('memori_bobot');
            $table->string('cpu_bobot');
            $table->string('berat_bobot');
            $table->string('daya_bobot');
            $table->string('kepentingan_harga');
            $table->string('kepentingan_memori');
            $table->string('kepentingan_cpu');
            $table->string('kepentingan_berat');
            $table->string('kepentingan_daya');
            $table->string('hasil');
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
        Schema::dropIfExists('spk_data');
    }
};