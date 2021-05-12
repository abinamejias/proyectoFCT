<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favtrack extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function favtracks()
    {
        return $this->belongsToMany(users::class, 'usersxfavtracks', 'favtracks_id' /* de roles */, 'users_id' /* de modules */);
    }
}
