<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Document extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
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
    protected $casts = [

        'passport' => 'array',
        'passport_copy' => 'array',
        'photo' => 'array',
        'police_clearance' => 'array',
        'educational_certificate' => 'array',
        'technical_certificate' => 'array',
        'driving_licence' => 'array',
        'national_id' => 'array',
    ];

}
