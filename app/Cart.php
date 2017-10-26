<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = ['user_id'];

    public function cart_items()
    {
    	return $this->hasMany('App\CartItem');
    }

    public static function isUserExist($id)
    {
    	$user = static::where('user_id', $id)
    			->first();

    	return !is_null($user);
    }

    public static function findByUserId($user_id)
    {
    	return static::where('user_id', $user_id)
    				->orderBy('id', "DESC")
    				->first();
    }
}
