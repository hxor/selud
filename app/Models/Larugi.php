<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Larugi extends Model
{
    protected $table = 'larugi';

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
        return $this->hasMany(LarugiDetail::class, 'larugi_id', 'id');
    }
}
