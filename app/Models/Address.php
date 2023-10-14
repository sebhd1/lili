<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'line1',
        'line2',
        'house_number',
        'city',
        'province',
        'zip_code',
        'client_id'
    ];
}
