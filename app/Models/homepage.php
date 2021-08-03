<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    use HasFactory;

    protected $fillable=[
        'company_name',
        'bg1',
        'b2',
        'phone'

    ];

}
