<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function cart_items()
	{
		return $this->hasMany('App\CartItem');
	}

	public static function totalPrice($cart_items)
	{
		$total_price = 0;

		if ($cart_items->isNotEmpty())
		{
			foreach ($cart_items as $item) {
				$total_price += $item->product()->first()->price;
			}
		}

		return $total_price;
	}
}
