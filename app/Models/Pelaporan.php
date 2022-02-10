<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;
    protected $table = 'pelaporan';
    protected $primaryKey = 'id_lapor';
    protected $fillable = [
        'id_warga',
        'id_bencana',
        'id_kecamatan',
        'waktu',
        'status',
        'id_petugas',
    ];

    public function warga(){
        return $this->belongsTo(User::class, 'id_warga','id_user');
    }

    public function petugas(){
        return $this->belongsTo(User::class, 'id_petugas','id_user');
    }

    public function bencana(){
        return $this->belongsTo(Bencana::class, 'id_bencana');
    }

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }

    public function detail(){
        return $this->hasMany(DetailKorban::class, 'id_detail');
    }
}
