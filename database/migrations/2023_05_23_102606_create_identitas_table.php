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
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('nohp');
            $table->string('email');
            $table->string('kodepos');
            $table->string('logo');
            $table->text('gmap');
            $table->string('facebook');
            $table->string('instagram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas');
    }
};
