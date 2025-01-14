<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'description',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    
}
