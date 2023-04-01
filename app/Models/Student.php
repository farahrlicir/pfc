<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=[
      'FirstName',
      'LastName',
       'Gender',
       'Date-of-birth',
       'place-of-birth',
       'adresse',
       'nationality',
       'blood-group',
       'disease',
       'level',
       'class'
    ];
}
