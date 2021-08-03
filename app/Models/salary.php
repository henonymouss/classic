<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    use HasFactory;
    public function salary()
    {
        return $this->hasMany(employee::class);
    }
    protected $fillable = [
        'emp_id',
        'month',
        'year',
        'sal',
    ];
}
