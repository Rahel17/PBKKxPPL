<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Anggota;
use App\Models\Uang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        $anggota1 = Anggota::create([
            'nama' => 'Rana',
            'npm' => 'G1A022017',
            'bidang' => 'Bidang Inti',
            'jabatan' => 'Kepala Adkeu',
        ]);

        $anggota2 = Anggota::create([
           'nama' => 'Resyaliana',
           'npm' => 'G1A022018',
           'bidang' => 'Bidang Inti',
           'jabatan' => 'Bendahara Umum',
        ]);

        $anggota3 = Anggota::create([
            'nama' => 'Azilzah',
            'npm' => 'G1A022019',
            'bidang' => 'Bidang Inti',
            'jabatan' => 'Sekretar Umum',
        ]);

        $anggota3 = Anggota::create([
            'nama' => 'Azilzah',
            'npm' => 'G1A022019',
            'bidang' => 'Bidang Inti',
            'jabatan' => 'Sekretar Umum',
        ]);
        
        Uang::create([
            'hari_tanggal' => '2022-01-01',
            'uraian' => 'Uang Bulan Januari',
            'bidang' => 'Bidang Inti',
            'pemasukan' => 100000,
            'pengeluaran' => 0,
            'total' => 100000,
            //'penerima_pemberi' => 'Ketum',
            'bukti_transaksi' => true,
            'status_spj' => 'Diserahkan',
            'anggota_id' => $anggota1->id

        ]);

        Uang::create([
            'hari_tanggal' => '2022-01-10',
            'uraian' => 'Makrab',
            'bidang' => 'Bidang Inti',
            'pemasukan' => 100000,
            'pengeluaran' => 0,
            'total' => 100000,
            //'penerima_pemberi' => 'Ketum',
            'bukti_transaksi' => true,
            'status_spj' => 'Diserahkan',
            'anggota_id' => $anggota1->id

        ]);

        Uang::create([
            'hari_tanggal' => '2024-10-01',
            'uraian' => 'Ulang Tahun',
            'bidang' => 'Bidang Inti',
            'pemasukan' => 100000,
            'pengeluaran' => 0,
            'total' => 100000,
            //'penerima_pemberi' => 'Ketum',
            'bukti_transaksi' => true,
            'status_spj' => 'Diserahkan',
            'anggota_id' => $anggota2->id

        ]);

        Uang::create([
            'hari_tanggal' => '2024-12-30',
            'uraian' => 'Perayaan Hari Besar',
            'bidang' => 'Bidang Inti',
            'pemasukan' => 100000,
            'pengeluaran' => 0,
            'total' => 100000,
            //'penerima_pemberi' => 'Ketum',
            'bukti_transaksi' => true,
            'status_spj' => 'Diserahkan',
            'anggota_id' => $anggota3->id

        ]);
    }
}
