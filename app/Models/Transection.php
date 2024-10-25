<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
    use HasFactory;
    protected $fillable = [
        'transection_name',
        'transection_description',
        'transection_type',
        'transection_source',
        'transection_amount',
        'tansection_tax',
        'create_by',
    ];
}
