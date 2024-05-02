<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_merk'];   
    public $timestamps = true;

    //  relasi ke tabel tlpon
    public function produk()
    {
        return $this->hasMany(Merk::class);
    }
}
