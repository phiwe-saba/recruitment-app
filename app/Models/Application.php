<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $guarded = [];

    //establishing connection of relationship with job
    public function jobs(){
        return $this->hasMany(Job::class);
    }

    //establishing connection of relationship with user
    public function users(){
        return $this->hasMany(User::class);
    }
}
