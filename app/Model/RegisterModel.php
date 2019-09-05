<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    protected $table = 'register';
    protected $fillable = [
        'id',
        'username',
        'password',
        'email',
        'status_id',
    ];
}
