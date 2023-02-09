<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    # Player Relationship
    public function player()
    {
        return $this->hasMany(Pemain::class, 'game_id', 'id');
    }
}
