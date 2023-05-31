<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = ['schoolname','schooladresse','phonenum','faxnum','website','email'];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
    public function directors()
    {
        return $this->hasOne(Director::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function libraries()
    {
        return $this->hasOne(Library::class);
    }

}

