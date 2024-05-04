<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nama_pembeli','jenis_kelamin'];   
    public $timestamps = true;

    //  relasi ke tabel tlpon
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
