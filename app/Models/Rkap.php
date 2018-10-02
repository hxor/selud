<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rkap extends Model
{
    protected $table = 'rkap';

    protected $fillable = [
        'bumd_id', 'judul', 'tanggal', 'status'
    ];

    public function bumd()
    {
        return $this->belongsTo(Bumd::class, 'bumd_id', 'id');
    }

    public function detail()
    {
        return $this->hasMany(RkapDetail::class, 'rkap_id', 'id');
    }
}
