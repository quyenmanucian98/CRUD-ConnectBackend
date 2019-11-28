<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';
    protected $fillable = [
        'id',
        'name',
        'price',
        'system'
    ];
}
