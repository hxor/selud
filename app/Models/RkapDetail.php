<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RkapDetail extends Model
{
    protected $table = 'rkap_detail';

    protected $fillable = [
        'rkap_id', 'rekening2_id', 'rekening3_id', 'nilai'
    ];

    public function parent()
    {
        return $this->belongsTo(Rkap::class, 'rkap_id', 'id');
    }

    public function rekening2()
    {
        return $this->belongsTo(Rekening2::class, 'rekening2_id', 'id');
    }

    public function rekening3()
    {
        return $this->belongsTo(Rekening3::class, 'rekening3_id', 'id');
    }
}
