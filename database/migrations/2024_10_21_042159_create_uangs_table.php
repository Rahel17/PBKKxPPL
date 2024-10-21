<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('uangs', function (Blueprint $table) {
            $table->id();
            $table->date('hari_tanggal');
            $table->string('uraian');
            $table->string('bidang');
            $table->decimal('pemasukan', 15, 0)->default(0); 
            $table->decimal('pengeluaran', 15, 0)->default(0); 
            $table->decimal('total', 15, 0)->default(0); 
            //$table->string('penerima_pemberi');
            $table->boolean('bukti_transaksi');
            $table->enum('status_spj', ["Diserahkan", "Belum Diserahkan"]);
            $table->foreignIdFor(App\Models\Uang::class, 'anggota_id')->constrained()->OnDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('uangs');
    }
};
