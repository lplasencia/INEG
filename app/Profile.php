<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'apellido', 'direccion','telefono','foto','user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
