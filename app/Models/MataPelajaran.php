<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;
    protected $fillable = ['mata_pelajaran', 'kategori', 'jurusan'];

    public function siswas()
    {
        return $this->belongsToMany('App\Models\Siswa')->withPivot('nilai');
    }
}
