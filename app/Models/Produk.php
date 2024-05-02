<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_produk','jumlah','tanggal_produk','id_merk'];   
    public $timestamps = true;

    //  relasi ke tabel tlpon
    public function merk()
    {
        return $this->BelongsTo(Merk::class, 'id_merk');
    }
    
}
