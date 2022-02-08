<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBencana extends Model
{
    use HasFactory;
    protected $table = 'kategori_bencana';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'jenis_kategori',
    ];

    public function bencana(){
        return $this->hasMany(Bencana::class,'id_bencana');
    }
}
