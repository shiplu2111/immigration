<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAgent extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'company_name',
        'phone',
        'email',
        'address_one',
        'address_two',
        'user_id',
        'agent_id',
        'created_by',
    ];
}
