<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Course extends Model  implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = ['id'];

    public function lawyers()
    {
        return $this->belongsToMany(Lawyer::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
