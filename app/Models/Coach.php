<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'description',
        'rate'
    ];

    public $timestamps = false;
}
