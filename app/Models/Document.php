<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'passport',
        'passport_copy',
        'photo',
        'police_clearance',
        'educational_certificate',
        'technical_certificate',
        'driving_licence',
        'national_id',
        'candidate_id',
        'created_by',
    ];
}
