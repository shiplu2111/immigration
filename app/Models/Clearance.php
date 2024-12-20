<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    use HasFactory;
    protected $fillable = [
        'bmet_clearance',
        'air_ticket',
        'candidate_id',
        'create_by',
    ];
}
