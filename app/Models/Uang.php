<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uang extends Model
{
    use HasFactory;
    protected $table = 'uangs';
    protected $fillable = [
        'hari_tanggal',
        'uraian',
        'bidang',
        'pemasukan',
        'pengeluaran',
        'total',
        //'penerima_pemberi',
        'bukti_transaksi',
        'status_spj',
        'anggota_id',
    ];

    //one to many
    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
