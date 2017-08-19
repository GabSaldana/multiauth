<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
/* Notifiable is used for allowing us to send notifications
to this user type through the Notifiable/Notifications api
Authenticatable on the other hand imports all the authentication
code that Laravel ships with,*/
    use Notifiable;
/*sets the guard that we will authenticate against.
This correlates with settings in config/auth.php
 The way it handles multiple user type authentication
 is a system called “guards”*/
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job_title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
