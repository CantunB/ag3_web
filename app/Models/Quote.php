<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Quote extends Model
{
    use HasFactory;
    protected $table = 'quotes';
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
        'passengers',
        'date_service',
        'time_service',
        'round_service',
        'date_comeback',
        'time_comeback',
        'type_trip',
        'request_unit',
        // 'price',
        // 'type_payment',
        'status_quotes',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->paterno} {$this->materno}";
    }

    /**
     * Get the user that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function TypeUnit(): BelongsTo
    {
        return $this->belongsTo(TypeUnit::class, 'request_unit');
    }
    public function TypeTrip(): BelongsTo
    {
        return $this->belongsTo(TypeTrip::class, 'type_trip');
    }

    public function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function State(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
