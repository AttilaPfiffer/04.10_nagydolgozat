<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tevekenysegek extends Model
{
    protected $fillable = [
        'kat_id',
        'tev_nev',
        'allapot'
    ];

    public function tevekenysegek() {
        return $this->belongsTo(Tevekenysegek::class, 'id', 'kat_id');
    }
}
