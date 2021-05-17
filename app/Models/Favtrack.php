<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favtrack extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function favtrack()
    {
        return $this->belongsToMany(Playlist::class);
    }
}
