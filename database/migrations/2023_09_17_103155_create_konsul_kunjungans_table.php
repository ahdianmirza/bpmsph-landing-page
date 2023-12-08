<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konsul_kunjungans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('whatsapp');
            $table->string('asal');
            $table->string('alamat');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('staff');
            $table->string('tujuan');
            $table->string('suhuKonsul')->nullable();
            $table->string('nomorAntrianKonsul')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsul_kunjungans');
    }
};