<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $primaryKey = 'id_kecamatan';
    protected $fillable = [
        'id_kota',
        'nama_kecamatan',
    ];

    public function kota(){
        return $this->belongsTo(Kota::class, 'id_kota');
    }

    public function lapor(){
        return $this->hasMany(Pelaporan::class, 'id_lapor');
    }
}
