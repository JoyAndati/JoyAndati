<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class milk extends Model
{
    use HasFactory;
       protected $fillable = [
        'farmer_id',
        'quantity',
        'quality',
        'date',
        'time',
        'payable_amount',
    ];
}
