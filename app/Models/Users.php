<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Users extends Model
{
    // use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'u_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'password',
    ];
}