<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Valorant extends Model
{
    use HasFactory;
    protected  $guarded = [];
    protected $dates = ['created_at'];

    public function kategori_game()
    {
        return $this->belongsToMany('App\Models\Kategori', );
    }
}
