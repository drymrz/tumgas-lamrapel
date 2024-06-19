<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author',
        'publisher',
        'category',
        'stock',
        'price',
        'image_name'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
