<?php

namespace App;

class Basket
{
	public $items = null; //group of products it's array
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldBasket)
	{
		if($oldBasket){
			$this->items = $oldBasket->items;
			$this->totalQty = $oldBasket->totalQty;
			$this->totalPrice = $oldBasket->totalPrice;
		}
	}

	public function add($item, $id){
		$storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
		
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}
		}

		$storedItem['qty']++;
		$storedItem['price'] = $item->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;

		$this->totalQty++;
		$this->totalPrice += $item->price;
	}

	public function remove($key){
		unset($this->items[$key]);
	}
}
