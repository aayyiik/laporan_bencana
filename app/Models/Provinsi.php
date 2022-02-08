<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    protected $primaryKey = 'id_provinsi';
    protected $fillable = [
        'nama_provinsi',
    ];

    public function kota(){
        return $this->hasMany(Kota::class,'id_kota');
    }
}
