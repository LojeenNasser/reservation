<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Available extends Model
{
    use HasFactory;
    public $fillable = ['day_code', 'available_id', 'available_type'];


    public function availabilities()
    {
        return $this->morphTo();
    }
}
