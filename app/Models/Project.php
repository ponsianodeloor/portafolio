<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function portfolio(){
        return $this->belongsTo(Portfolio::class);
    }

    public function category(){
        return $this->belongsTo(ProjectCategory::class);
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
