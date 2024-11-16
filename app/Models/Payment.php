<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_type',
        'payment_amount',
        'group_id',
        'individual_id',
        'agent_id',
        'total_amount',
        'due_amount',
        'create_by',
    ];
}

