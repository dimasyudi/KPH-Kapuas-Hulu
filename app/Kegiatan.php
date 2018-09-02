<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Kegiatan extends Model
{
    protected $fillable = [
        'nama', 'deskripsi', 'alamat',
        'foto', 'tglmulai', 'tglselesai',
        'user_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
