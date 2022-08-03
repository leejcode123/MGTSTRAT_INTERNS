<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement_fee extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'cstmzd_eng_form_id',
        'type',
        'consultant_num',
        'hour_fee',
        'hour_num',
        'nswh',
        'notes',
    ];
}
