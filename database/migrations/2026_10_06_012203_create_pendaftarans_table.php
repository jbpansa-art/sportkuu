<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('event_id')
                ->constrained('events')
                ->cascadeOnDelete();

            $table->string('nama_peserta');
            $table->string('no_hp');
            $table->text('alamat');

            $table->string('nama_sekolah')->nullable();
            $table->string('tingkatan_sekolah')->nullable();

            $table->enum('status', [
                'Menunggu',
                'Diterima',
                'Ditolak'
            ])->default('Menunggu');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};