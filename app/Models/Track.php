<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    public $table = 'tracks';

    protected $fillable = ['name','duration','albums_id'];

    public function albums()
    {
        return $this->hasMany(Albums::class);
    }
}
