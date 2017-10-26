<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Notifications\Invoice;

class User extends Authenticatable
{
    use Notifiable;

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

    public function cart()
    {
        return $this->hasOne('app\Cart');
    }

    public function routeNotificationForMail()
    {
        return $this->email;
    }

    public function sendMail($cart)
    {
        $this->notify(new Invoice($cart));
    }
}
