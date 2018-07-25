<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upben extends Model
{
    protected $fillable = [
        'nim',
        'urut', 
        'nama', 
        'telp',
        'program_studi'
    ];
}
