<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Galeri extends Model
{
    protected $fillable = [
        'nama', 'foto', 'user_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
