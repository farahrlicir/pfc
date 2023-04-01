<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;


  protected $fillable = ['school-name','school-adresse','phone-num','fax-num','web-site','email'];
}
