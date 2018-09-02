<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Kegiatan;
use App\Galeri;
use App\Berita;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nip', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function kegiatans()
    {
      return $this->hasMany(Kegiatan::class);
    }

    public function galeris()
    {
      return $this->hasMany(Galeri::class);
    }

    public function beritas()
    {
      return $this->hasMany(Berita::class);
    }
}
