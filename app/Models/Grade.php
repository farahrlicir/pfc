<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['Arabicnote', 'RemarqueA','Mathnote','RemarqueM','Frenchnote', 'RemarqueF','Islamicnote','RemarqueI','Technonote','RemarqueT','Civicnote','RemarqueC','HistoryGeonote','RemarqueH','Englishnote','RemarqueE','Fullnote','RemarqueFull'];
 
}
