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
        Schema::create('konsols', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('harga');
            $table->string('kapasitas_memori');
            $table->string('kecepatan_cpu');
            $table->string('berat');
            $table->string('konsumsi_daya');
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
        Schema::dropIfExists('konsols');
    }
};