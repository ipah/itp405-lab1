<?php 
	class Product{
		public $name, $price;

		public function __construct($productName, $productPrice){
			$this->name = $productName;
			$this->price = $productPrice;
		}
	}
?>