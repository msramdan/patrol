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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('no_laporan');
            $table->string('judul');
            $table->longText('deskripsi')->nullable();
            $table->datetime('tanggal');
            $table->string('phone');
            $table->string('photo')->nullable();
            $table->string('status_laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
