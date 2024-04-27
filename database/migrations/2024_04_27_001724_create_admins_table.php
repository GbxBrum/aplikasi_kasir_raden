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
        Schema::create('admins', function (Blueprint $table) {
                $table->integer('petugasid');
                $table->string('username');
                $table->string('password');
                $table->string('email');
                $table->string('nama_lengkap');
                $table->string('nomor_telepon');
                $table->enum('role',['admin','petugas']);
                $table->string('alamat');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
