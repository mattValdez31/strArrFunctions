<?php
	$obj = new main();

	class main
	{
		public function __construct()
		{
			echo 'Hello i\'m an object';
		}

		public function asciiToChar($x)
		{
			echo chr($x);
		}

		public function __destruct()
		{
			echo 'I\'m done </br>';
		}
	}
?>
