<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    use HasFactory;
    protected $table = "pelanggaran_siswa";
    protected $guarded = ['id'];
 
    public function pelanggaran()
    {
        return $this->belongsToMany(Pelanggaran::class, 'pelanggaran_siswa', 'id');
    }

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'pelanggaran_siswa', 'id');
    }
}
