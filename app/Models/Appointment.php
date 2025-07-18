<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'healthcare_provider_id','provider_name', 'date', 'time', 'location', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function healthcareProvider()
    {
        return $this->belongsTo(User::class, 'healthcare_provider_id');
    }
}
