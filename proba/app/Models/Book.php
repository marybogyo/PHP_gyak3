<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $primarykey = 'book-id';
    protected $fillable = [
        'author',
        'title',
        'pieces',
    ];
}
