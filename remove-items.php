<?php
	require('./shoppingcart.php');
	require('./lineitem.php');
	require('./product.php');
	
	use Apple\iTunes\Checkout\ShoppingCart;
	use Apple\iTunes\Checkout\LineItem;

	

	$album = new Product('Bright Soundtrack', 10.99);
	$song = new Product('Some Song', 0.99);
	$show = new Product('Some TV Show', 29.99);

	$lineItem1 = new LineItem($album,1);
	$lineItem2 = new LineItem($song,1);
	$lineItem3 = new LineItem($show,1);

	//echo $lineItem1->getTotal();
	$shoppingCart = new ShoppingCart();
	$shoppingCart->add($lineItem1);
	$shoppingCart->add($lineItem2);
	$shoppingCart->add($lineItem3);

	$shoppingCart->remove($lineItem1);


	echo 'items in cart: ';
	$list = $shoppingCart->getItems();
	foreach($list as $list_item){
		echo $list_item->product->name . ", ";
	}

?>