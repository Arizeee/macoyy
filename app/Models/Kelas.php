<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'kelas_jurusan',
        'guru_id',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class); 
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class); 
    }
}
