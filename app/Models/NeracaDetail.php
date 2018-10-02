<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NeracaDetail extends Model
{
    protected $table = 'neraca_detail';

    protected $fillable = [
        'neraca_id', 'rekening2_id', 'rekening3_id', 'nilai'
    ];

    public function parent()
    {
        return $this->belongsTo(Neraca::class, 'neraca_id', 'id');
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
