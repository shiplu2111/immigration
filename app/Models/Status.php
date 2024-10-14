<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_received',
        'submitted_for_work_permit',
        'work_permit_received',
        'submitted_for_visa',
        'visa_received',
        'migrated',
        'create_by',
        'candidate_id',
    ];
}
