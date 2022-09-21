<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function about(){
        return $this->hasOne(About::class);
    }

    public function facts(){
        return $this->hasMany(Fact::class);
    }

    public function skills(){
        return $this->hasMany(Skill::class);
    }

    public function resume(){
        return $this->hasOne(Resume::class);
    }

    public function educations(){
        return $this->hasMany(Education::class);
    }

    public function profesionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }

    public function portfolio(){
        return $this->hasOne(Portfolio::class);
    }
}
