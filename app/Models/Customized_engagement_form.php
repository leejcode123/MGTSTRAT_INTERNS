<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customized_engagement_form extends Model
{
    
    // use HasFactory;
    public $timestamps = false;
    protected $table = 'customized_engagement_forms';
    protected $primaryKey = 'id';
    protected $casts = [
        'program_dates' => 'array',
        'program_start_time' => 'array',
        'program_end_time' => 'array',
        'cluster' => 'array',
        'core_area' => 'array'
    ];
}
