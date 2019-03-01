<?php

namespace App\Models;

use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{
    use Notifiable;

    public $timestamps;

    protected $fillable=[
        'name','password',
    ];

}
