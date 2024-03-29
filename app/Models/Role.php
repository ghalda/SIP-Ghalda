<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'role';
    protected $fillable = ['id', 'name'];
}
