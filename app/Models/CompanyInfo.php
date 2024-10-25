<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'visa_type',
        'name',
        'address',
        'city',
        'country',
        'telephone',
        'email',
        'contact_person',
        'contact_telephone',
        'contact_email',
        'job_category',
        'contract_duration',
        'salary',
        'accommodation',
        'meal',
        'uniform',
        'transportation',
        'yearly_vacation',
        'air_ticket',
        'status',
        'create_by',
    ];
}
