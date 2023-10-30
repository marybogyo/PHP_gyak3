<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    public $primarykey = 'copy-id';
    protected $fillable = [
        'book_id',
        'user_id',
    ];
}
