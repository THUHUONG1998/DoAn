<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    protected $table = 'password_resets';
    public $timestamp = false;

    protected $fillable = [
        'email',
        'token',
    ];
}
