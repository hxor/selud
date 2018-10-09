<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Neraca extends Model
{
    protected $table = 'neraca';

    protected $fillable = [
        'bumd_id', 'judul', 'tanggal', 'status'
    ];

    protected $dates = [
        'tanggal'
    ];

    public function bumd()
    {
        return $this->belongsTo(Bumd::class, 'bumd_id', 'id');
    }

    public function detail()
    {
        return $this->hasMany(NeracaDetail::class, 'neraca_id', 'id');
    }
}
