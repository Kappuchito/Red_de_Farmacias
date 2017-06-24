<?php

namespace Farmacia;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'usuarios';
    protected $fillable = ['rut', 'nombre', 'password', 'estado', 'tipoperfil'];
    public $timestamps = false;
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
