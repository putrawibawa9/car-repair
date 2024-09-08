<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'license_plate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceLogs()
    {
        return $this->hasMany(ServiceLog::class);
    }
}
