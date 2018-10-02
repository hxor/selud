<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekening1 extends Model
{
    protected $table = 'rekening1';

    protected $fillable = [
        'kode', 'nama'
    ];

    public function rekening2()
    {
        return $this->hasMany(Rekening2::class, 'rekening1_id', 'id');
    }
}
