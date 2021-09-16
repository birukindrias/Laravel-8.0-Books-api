<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public $table = 'books';
    protected $fillable = [
        'name',
        'author',
        
        'publication_year'
    ];
}
