<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_name',
        'serial',
        'status',
        'create_by',
    ];
    public $sortable = [
        'order_column_name' => 'serial',
        'sort_when_creating' => true,
    ];
}
