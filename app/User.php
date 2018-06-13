<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reg_no', 'course_name', 'name', 'avatar', 'email', 'bank_name', 'account_no', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * ? Why is this even here will it work...
     * Discover if the user has a signed record.
     */
    public function signed()
    {
        return $this->hasOne('App\Signed');
    }
}
