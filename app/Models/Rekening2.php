<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekening2 extends Model
{
    protected $table = 'rekening2';

    protected $fillable = [
        'rekening1_id', 'kode', 'nama'
    ];

    public function rekening1()
    {
        return $this->belongsTo(Rekening1::class, 'rekening1_id', 'id');
    }

    public function rekening3()
    {
        return $this->hasMany(Rekening3::class, 'rekening2_id', 'id');
    }
}
