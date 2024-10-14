<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCandidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'air_ticket',
        'translation',
        'mofa_attest',
        'notary_attest',
        'transportation',
        'photocopy',
        'bmet_clearance',
        'visa_cost',
        'embassy_fee',
        'embassy_apointment_fee',
        'agent_commission',
        'other_expenses',
        'candidate_id',
        'create_by',
    ];
}
