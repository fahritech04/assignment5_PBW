<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    // Muhammad Raihan Fahrifi - 6706223009 Purba 6706220081
    use HasFactory;
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi'
    ];
    const CREATED_AT = 'createdAt'; //untuk menunjuk column created_at yang dibuat otomatis ke column createdAt
}
