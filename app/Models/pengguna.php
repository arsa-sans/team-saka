<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    public $incrementing = false; // karena id_user varchar
    protected $keyType = 'string';

    protected $fillable = [
        'id_user',
        'username',
        'password',
        'user_role',
    ];

    protected $hidden = [
        'password',
    ];
}
