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
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gupeg_id')->unsigned();
            $table->string('jabatan')->nullable();
            $table->text('penugasan')->nullable();
            $table->string('tempat')->nullable();
            $table->date('waktu')->nullable();
            $table->timestamps();
            $table->foreign('gupeg_id')->references('id')->on('gupegs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tugas');
    }
};
