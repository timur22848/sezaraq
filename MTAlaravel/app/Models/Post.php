<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use AsSource;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'body',
        'author'
    ];
}