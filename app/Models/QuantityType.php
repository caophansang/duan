<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuantityType extends Model
{
    use HasFactory;
    protected $table = 'quantity_types';

    const SHOW_STATUS = 1;
    const PENDING_STATUS = 2;
    const CANCEL_STATUS = 3;

    protected $fillable = [
        'name',
        'status',
    ];
}
