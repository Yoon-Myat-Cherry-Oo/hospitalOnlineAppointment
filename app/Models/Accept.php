<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accept extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'date',
        'department',
        'number',
        'message',
    ];
}
