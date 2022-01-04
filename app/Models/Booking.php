<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'paterno',
        'materno',
        'email',
        'phone',
        'country_id',
        'state_id',
        'type_service',
        'origin',
        'destiny',
        'passenger',
        'date_arrival',
        'time_arrival',
        'round_service',
        'date_departure',
        'time_departure',
        'request_unit',
        'price',
        'type_payment',
        'status_payment',
        'status_booking'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->paterno} {$this->materno}";
    }
}
