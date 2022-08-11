<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;
    protected $fillable = [
        'letter_id',
        'lampiran',
        'status',
        'sifat',
        'petunjuk',
        'catatan_rektor',
        'tgl_selesai',
        'tgl_aju_kembali',
        'penerima_disposisi',
        'kepada',
        'letter_file'
    ];

    protected $hidden = [];

    public function letter()
    {
        return $this->belongsTo(Letter::class, 'letter_id', 'id');
    }
}
