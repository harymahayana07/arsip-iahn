<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letterout extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'letter_no',
        'letterout_date',
        'regarding',
        'purpose',
        'letter_file',
        'letter_type'
    ];

    protected $hidden = [];
  
}
