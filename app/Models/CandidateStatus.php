<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'status_name',
        'status',
        'create_by',
    ];

}
