<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{

    public $table = "lawyers";

    public $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'image',
        'tags',
        'jobtitle',
        'description',
        'city',
        'voicecall',
        'message',
        'videocall',
        'start',
        'start',
         'end'
        ];
}
