<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKorban extends Model
{
    use HasFactory;
    protected $table = 'detail_korban';
    protected $primaryKey = 'id_detail';
    protected $fillable = [
        'id_lapor',
        'NIK',
        'nama',
        'umur',
        'gender',
        'kondisi',
    ];

    public function pelaporan(){
        return $this->belongsTo(Pelaporan::class, 'id_lapor');
    }
}
