<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'cstmzd_eng_form_id',

    ];
}
