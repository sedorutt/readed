<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'readed_at',
        'review',
        'content',
        "user_name"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
