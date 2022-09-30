<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalReference extends Model
{
    use HasFactory;

    public function testimonial(){
        return $this->belongsTo(Testimonial::class);
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
