<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement_fee extends Model
{
    use HasFactory;

    protected $table = 'engagement_fees';

    protected $primaryKey = 'id';

    public function Customized_engagement_form()
    {
        return $this->belongsTo(Customized_engagement_form::class);
    }
}
