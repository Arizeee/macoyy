<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'gambar',
        'nama_siswa',
        'nisn',
        'jenis_kelamin',
        'alamat',
        'no_telp',
        'kelas_id',
        'poin',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
        // one to many invers
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
        // one to many invers
    }

    public function pelanggaran()
    {
        return $this->belongsToMany(Pelanggaran::class, 'pelanggaran_siswa', 'siswa_id', 'pelanggaran_id');
        // 
    }

}
