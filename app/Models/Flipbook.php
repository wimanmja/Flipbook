<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flipbook extends Model
{
    protected $table = 'flipbook'; // Specify the database table name

    protected $fillable = [
        'name',
        'desc',
        'content',
        'status', // Add 'status' if you want to manage it through the model
    ];
}
