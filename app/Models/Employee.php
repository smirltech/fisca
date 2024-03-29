<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Employee extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'email',
        'phone_number',
        'department',
        'photo',
        'matriculate',
        'base_salary',
        'payed',
        'address',
        'order_number'
    ];

}
