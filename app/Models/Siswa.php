<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'nis', 'nisn', 'jurusan', 'nama_wali', 'tahun_masuk', 'tahun_lulus'];

    public function matapelajarans()
    {
        return $this->belongsToMany('App\models\MataPelajaran')->withPivot('nilai');
    }
}
