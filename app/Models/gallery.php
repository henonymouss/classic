<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'categories',
        'captured_by',
        'image',
        'date'

    ];
}
