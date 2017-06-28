<?php
	$users = require('client.php');
		$client1 = new Client();
		$client2 = new Client();

		return[
			$client1,
			$client2
		];
?>