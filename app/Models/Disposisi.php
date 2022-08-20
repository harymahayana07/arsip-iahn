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
        'penerima_disposisi_2',
        'kepada',
        'kepada_2',
        'petunjuk_kpd_1',
        'petunjuk_kpd_2',
        'tgl_selesai_2',
        'tgl_selesai_3',
        'penerima_2',
        'penerima_3',
        'letter_file'
    ];
    // protected $dates = ['tgl_selesai','tgl_aju_kembali','tgl_selesai_2','tgl_selesai_3'];
    protected $hidden = [];

    public function letter()
    {
        return $this->belongsTo(Letter::class, 'letter_id', 'id');
    }
}
