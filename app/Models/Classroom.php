<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = ['Name','Capacity','Subject','Teacher','begin','end'];
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    } 
     public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
