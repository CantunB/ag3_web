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
     * Get the user that owns the Tariff
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function units(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
