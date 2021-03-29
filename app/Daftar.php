<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable = [
        'nis',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'asal_sekolah',
        'kelas',
        'jurusan'
    ];
}
