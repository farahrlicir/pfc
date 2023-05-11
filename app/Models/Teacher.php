<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'Tphoto',
        'TFirstName',
        'TLastName',
        'TGender',
        'TDateofbirth',
        'Tplaceofbirth',
        'Tadresse',
        'Tnationality',
        'Tphonenumber',
        'Tdisease',
        'Tbloodgroup',
        'Tlevel',
        'Tclass',
        'Tdatework',
        'Sname'
        ];
        public function Subject()
        {
            return $this->hasOne(Subject::class);
        }    
        public function Classroom()
        {
            return $this->hasMany(Classroon::class);
        }    
       
}
