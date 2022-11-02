<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable =[
        'name', 'date_of_bird', 'place_of_bird', 'gender','email','hp'
    ];
}
