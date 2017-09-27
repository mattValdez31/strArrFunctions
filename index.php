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

		public function explodeStr($del, $string)
		{
			$arrExplode = explode($del, $string);
			print_r($arrExplode);
		}

		public function printThis($msg)
		{
			echo $msg;
		}

		public function stringLength($msg)
		{
			$msglen  = int strlen($msg);
			echo $msglen;
		}

		public function __destruct()
		{
			echo 'I\'m done </br>';
		}
	}
?>
