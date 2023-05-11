<?php

namespace App\Models;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'photo',
        'FirstName',
        'LastName',
        'Gender',
        'Dateofbirth',
        'placeofbirth',
        'adresse',
        'nationality',
        'disease',
        'bloodgroup',
        'level',
        'class',
        'MotherName',
        'MotherProfession',
        'PhoneNumberM',
        'FullAddressM',
        'FatherName',
        'FatherProfession',
        'PhoneNumberF',
        'FullAddressF',
        'FamilySituation',
        'Remarque'
        ];
        public function Classroom()
    {
        return $this->hasOne(Classroom::class);
    }    
}
