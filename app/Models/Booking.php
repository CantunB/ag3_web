<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';

    protected $fillable = [
        'slug',
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
        'airline_arrival',
        'flight_number_arrival',
        'date_arrival',
        'time_arrival',
        'comments_arrival',
        'round_service',
        'airline_departure',
        'flight_number_departure',
        'date_departure',
        'time_departure',
        'comments_departure',
        'request_unit',
        'price',
        'price_mx',
        'divisa',
        'type_payment',
        'transaction_id',
        'paypal_id',
        'status_payment',
        'status_booking'
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

    public function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function State(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public static function boot() {
        parent::boot();
        self::creating(function ($model) {
            $model->slug = IdGenerator::generate(['table' => 'bookings', 'field'=>'slug', 'length' => 8, 'prefix' =>'BOOK-']);
        });
    }
}
