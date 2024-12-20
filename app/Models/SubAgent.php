<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAgent extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'phone',
        'address_one',
        'address_two',
        'user_id',
        'agent_id',
        'created_by',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
