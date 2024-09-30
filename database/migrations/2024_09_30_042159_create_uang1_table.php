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
        Schema::create('uang1', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->date('hari_tanggal');
            $table->string('Uraian');
            $table->string('Bidang');
            $table->decimal('Pemasukan', 15, 0)->default(0); 
            $table->decimal('Pengeluaran', 15, 0)->default(0); 
            $table->decimal('Total', 15, 0)->default(0); 
            $table->string('penerima_pemberi');
            $table->boolean('bukti_transaksi');
            $table->enum('status_spj', ["Diserahkan", "Belum Diserahkan"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uang1');
    }
};
