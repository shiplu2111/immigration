<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeExpense extends Model
{
    use HasFactory;
    protected $fillable = [
        'rent',
        'service_charge',
        'electricity_bill',
        'gas_bill',
        'gasoline_bill',
        'stationary_bill',
        'food_bill',
        'non_food_bill',
        'cleaning_bill',
        'transport_bill',
        'salary',
        'bonus',
        'special_allowance',
        'others',
        'create_by',
    ];
}
