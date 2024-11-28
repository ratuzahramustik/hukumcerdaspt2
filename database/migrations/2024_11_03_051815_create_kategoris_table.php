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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('kategori', ['Pidana', 'Perdata', 'Pajak & Keuangan', 'Ketenagakerjaan', 'Hak asasi manusia']);
            $table->date('tanggal');
            $table->string('judul');
            $table->text('deskripsi');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
