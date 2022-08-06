<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter_no',
        'letter_date',
        'date_received',
        'agenda_no',
        'regarding',
        'disposisi',
        'department_id',
        'sender_id',
        'letter_file',
        'letter_type'
    ];

    protected $hidden = [

    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id','id');
    }

    public function sender()
    {
        return $this->belongsTo(Sender::class, 'sender_id','id');
    }
}
