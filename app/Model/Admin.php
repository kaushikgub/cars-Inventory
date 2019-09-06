<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = [];

    protected $table = 'admins';

    protected $fillable = ['name', 'email', 'password'];
}
