<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forminput extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pasien',
        'umur_pasien',
        'wa_pasien',
        'keluhan_pasien',
    ];
}
