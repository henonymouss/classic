<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    public function employee()
    {
        return $this->belongsTo(salary::class);

    }
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'tin',
        'salary',
        'position',
        'city',
        'age',
        'gender',
        'address',
        'experience',
        'facebook',
        'youtube',
        'instagram',
        'avatar'
    ];
}
