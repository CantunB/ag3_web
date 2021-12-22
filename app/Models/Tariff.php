<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Tariff extends Model
{
    use HasFactory;
    protected $table = 'tariff_hotels';

    public $timestamps = false;

    /**
     * Get the Type Unit that owns the Tariff
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type_unit(): BelongsTo
    {
        return $this->belongsTo(TypeUnit::class, 'type_unit_id', 'id');
    }

    /**
     * Get the Type Trip that owns the Tariff
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type_trip(): BelongsTo
    {
        return $this->belongsTo(TypeTrip::class, 'type_trip_id', 'id');
    }
}
