<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'npm',
        'bidang',
        'jabatan',
    ];

    //one to many
    public function uangs()
    {
        return $this->hasMany(Uang::class);
    }

}
