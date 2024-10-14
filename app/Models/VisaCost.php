<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaCost extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_package',
        'first_payment',
        'second_payment',
        'third_payment',
        'candidate_id',
        'create_by',
    ];
}
