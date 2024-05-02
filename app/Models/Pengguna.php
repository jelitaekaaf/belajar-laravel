<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama'];    // meamnggil dipilih 
    //protected $table = ['penggunas'];       //meanggil semua (langsung)
    public $timestamps = true;

    //  relasi ke tabel tlpon
    public function telepon()
    {
        return $this->hasOne(Telepon::class);
    }
}
