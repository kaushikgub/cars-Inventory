<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    protected $guarded = [];

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'promotion_email'];
}
