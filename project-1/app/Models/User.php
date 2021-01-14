<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['id', 'role_id', 'name', 'username', 'email', 'password'];
    protected $hidden = ['password'];
}
