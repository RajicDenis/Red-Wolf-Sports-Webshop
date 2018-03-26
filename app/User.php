<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser as CartalystUser;

class User extends CartalystUser {

    protected $fillable = [
        'email',
        'username',
        'password',
        'last_name',
        'first_name',
        'permissions',
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];

}
