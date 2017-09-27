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

		public function stingPos($myString, $findMe)
		{
			$pos = strpos($myString, $findMe);
			echo $pos;
		}

		public function toUpper($msg)
		{
			$msgU = strtoupper($msg);
			echo $msgU;
		}

		public function toLower($msg)
		{
			$msgL = strtolower($msg)
			echo $msgL;
		}

		public function htmlEnt($msg3)
		{
			$a = htmlentities($msg3);
			echo $a;
		}

		public function htmlEntDec($msg3)
		{
			$a = html_entity_decode($msg3);
			echo $a;
		}

		public function rightTrim($msg,$trimStr)
		{
			$a = rtrim($msg,$trimStr)
			var_dump($a);
		}

		public function __destruct()
		{
			echo 'I\'m done </br>';
		}
	}
?>
