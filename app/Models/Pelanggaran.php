<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $table ='pelanggaran';
    // protected $primaryKey =['id'];
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'pelanggaran_siswa', 'siswa_id', 'pelanggaran_id');
    }

}
