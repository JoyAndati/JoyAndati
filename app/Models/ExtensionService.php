<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtensionService extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'type',
        'product_or_service',
        'date',
        'time', 
        'user_id',       
        'payable_amount',
    ];
}
