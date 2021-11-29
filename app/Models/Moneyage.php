<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moneyage extends Model
{
    protected $fillable = [
        'id',
        'name',
        'date',
        'gender',
        'opinion',
        'wage'
    ];
}
