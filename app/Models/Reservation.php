<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkinDate',
        'checkoutDate',
        'numAdult',
        'numChildren'
        // 'name',
        // 'email',
        // 'address',
        // 'dateofbirth',
        // 'gender'


    ];
}
