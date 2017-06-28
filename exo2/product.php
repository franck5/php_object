<?php 

	class Product {

		private $_id;
		private $_name;
		private $_price;


		public function id() {
			return $this -> _id;
		}
		public function name() {
			return $this -> _name;
		}
		public function price() {
			return $this -> _price;
		}
	}

?>