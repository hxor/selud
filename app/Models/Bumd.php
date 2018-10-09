<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bumd extends Model
{
    protected $table = 'bumd';

    protected $fillable = [
        'nama', 'alamat', 'email', 'telepon'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'bumd_id', 'id');
    }
}
