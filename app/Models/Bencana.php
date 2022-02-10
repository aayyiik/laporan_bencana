<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    use HasFactory;
    protected $table = 'bencana';
    protected $primaryKey = 'id_bencana';
    protected $fillable = [
        'id_kategori',
        'nama_bencana',
    ];

    public function kategori(){
        return $this->belongsTo(KategoriBencana::class, 'id_kategori');
    }

    public function lapor(){
        return $this->hasMany(Pelaporan::class, 'id_lapor');
    }
}
