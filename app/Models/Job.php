<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    //establishing connection of relationship with application
    public function application(){
        return $this->belongsTo(Application::class, 'job_id');
    }

}
