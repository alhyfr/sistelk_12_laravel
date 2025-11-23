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
        Schema::create('gupegs', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('nip')->unique();
            $table->string('nik')->nullable();
            $table->string('tmp_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('npwp')->nullable();
            $table->string('ktp')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('bpjs_kes')->nullable();
            $table->string('bpjs_tk')->nullable();
            $table->string('jk')->nullable();
            $table->string('golda')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_peg')->nullable();
            $table->string('posisi')->nullable();
            $table->string('pos_fungsi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->unique();
            $table->string('bank')->unique();
            $table->string('rek')->unique();
            $table->enum('status',['aktif','non'])->default('aktif');
            $table->text('ket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gupegs');
    }
};
