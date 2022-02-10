<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $primaryKey = 'id_kota';
    protected $fillable = [
        'id_provinsi',
        'nama_kota',
    ];

    public function provinsi(){
        return $this->belongsTo(Provinsi::class,'id_provinsi');
    }

    public function kecamatan(){
        return $this->hasMany(Kecamatan::class,'id_kecamatan');
    }

    
}
