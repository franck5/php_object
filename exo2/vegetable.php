<?php 

	$products = require('product.php');
	class Vegetable extends Product {
		private $_productorName;
		private $_expiresAt;
		public function isFresh() {
			return;
		}
	}

?>