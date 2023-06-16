<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'description',
        'photo',
        'user_id',

    ];

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
