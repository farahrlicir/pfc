<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

     protected $fillable=[
    'id',
    'photo',
    'FirstName',
    'LastName',
    'Gender',
    'Dateofbirth',
    'placeofbirth',
    'adresse',
    'nationality',
    'bloodgroup',
    'disease',
    'level',
    'class',
    ];
}
