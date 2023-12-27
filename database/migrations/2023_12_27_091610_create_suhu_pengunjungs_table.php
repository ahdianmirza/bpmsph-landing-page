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
        Schema::create('suhu_pengunjungs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('asal');
            $table->string('keperluan');
            $table->float('suhu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suhu_pengunjungs');
    }
};