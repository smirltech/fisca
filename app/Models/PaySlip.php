<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaySlip extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'cost_of_living_allowance',
        'bonus',
        'gratuity',
        'leave_allowance',
        'commission',
        'other_allowances',
        'fringe_benefit',
        ];

}
