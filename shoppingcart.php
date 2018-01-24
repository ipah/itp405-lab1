<?php

	namespace Apple\iTunes\Checkout;
	class ShoppingCart{

		//public, protected, or private

		//public: can access methods from outside of the class
		protected $items = [];

		public function getItems(){
			return $this->items;
		}

		public function empty(){
			$newItems = [];

			$this->items = $newItems;
		}

		public function remove($remove_item){
			$newItems = [];
			 foreach($this->items as $item){
			 	if($item != $remove_item){
			 		$newItems[] = $item;
			 	}
			 }


			 $this->items = $newItems;

		}


		public function add($lineItem){
			//echo 'adding something';
			$this->items[] = $lineItem; //array push in php
			
		}
		public function getTotal(){
			$total = 0;
			foreach($this->items as $item){
				$total += $item->getTotal();
			}
			 return $total;
			}
	}
?>