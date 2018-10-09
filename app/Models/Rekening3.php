<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekening3 extends Model
{
    protected $table = 'rekening3';

    protected $fillable = [
        'bumd_id', 'rekening2_id', 'kode', 'nama'
    ];

    public function bumd()
    {
        return $this->belongsTo(Bumd::class, 'bumd_id', 'id');
    }

    public function rekening2()
    {
        return $this->belongsTo(Rekening2::class, 'rekening2_id', 'id');
    }
}
