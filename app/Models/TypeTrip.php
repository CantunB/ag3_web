<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTrip extends Model
{
    use HasFactory;
    protected $table = 'type_trips';

    public $timestamps = false;
}
