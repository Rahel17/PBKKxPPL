<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
    use HasFactory;
    protected $table = 'uang1';
    protected $fillable = [
        'no',
        'hari_tanggal',
        'uraian',
        'bidang',
        'pemasukan',
        'pengeluaran',
        'total',
        'penerima_pemberi',
        'bukti_transaksi',
        'status_spj',
    ];
}
