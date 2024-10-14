<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'marital_status',
        'birth_place',
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
        'village',
        'thana',
        'district',
        'phone',
        'email',
        'emergency_contact_name',
        'emergency_contact_relation',
        'emergency_contact_phone',
        'father_name',
        'mother_name',
        'spouse_name',
        'agent_id',
        'create_by',
    ];
}
