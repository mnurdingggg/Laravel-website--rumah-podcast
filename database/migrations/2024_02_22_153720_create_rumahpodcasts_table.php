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
        Schema::create('rumahpodcast', function (Blueprint $table) {
            $table->id();
            $table->string('Namapodcast');
            $table->string('Judul');
            $table->string('Foto');
            $table->enum('Genre',['K','C','I','H']);
            $table->date('Tanggal');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumahpodcasts');
    }
};
