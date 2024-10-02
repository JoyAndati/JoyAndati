<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
           protected $fillable = [
        'farmer_id',
        'farmer_name',
        'order_date',
        'order_collected',
        'product_or_service_id',
        'order_price',
        'Status',
    ];
}
