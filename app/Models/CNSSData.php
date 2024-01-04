<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CNSSData extends Model
{
    use HasFactory;
    protected $table = 'cnss_data';
    protected $fillable = [
        'social_security_number',
        'employee_id',
        'type_of_worker',
        'contributed_amount',
        'number_of_workdays',
        'number_of_work_hours',
        'gross_taxable_amount',
        'contributed_period',

    ];
}
