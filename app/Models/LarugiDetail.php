<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LarugiDetail extends Model
{
    protected $table = 'larugi_detail';

    protected $fillable = [
        'larugi_id', 'rekening2_id', 'rekening3_id', 'nilai'
    ];

    public function parent()
    {
        return $this->belongsTo(Larugi::class, 'larugi_id', 'id');
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
