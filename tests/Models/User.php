<?php

namespace Shahinur\Messenger\tests\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Shahinur\Messenger\Contracts\MessageableInterface;
use Shahinur\Messenger\Traits\Messageable;

class User extends Authenticatable implements MessageableInterface
{
    use Messageable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
