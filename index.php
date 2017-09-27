<?php
	$obj = new main();
	$obj->asciiToChar(20);
	$obj->explodeStr(' ', 'Hi my name is Matthew');



	class main
	{
		public function __construct()
		{
			echo 'Hello i\'m an object';
		}

		public function asciiToChar($x)
		{
			echo '<h1> Ascii to Char function demo </h1>';
			echo chr($x);
			echo '<hr>';
		}

		public function explodeStr($del, $string)
		{
			echo '<h1>String explode function demo </h1>';
			$arrExplode = explode($del, $string);
			print_r($arrExplode);
			echo '<hr>';
		}
		/*
		public function printThis($msg)
		{
			echo '<h1>Echo function demo </h1>';
			echo $msg;
			echo '<hr>';
		}

		public function stringLength($msg)
		{
			echo '<h1>String length function demo </h1>';
			$msglen  = strlen($msg);
			echo $msglen;
			echo '<hr>';
		}

		public function stingPos($myString, $findMe)
		{
			echo '<h1>String Position function demo </h1>';
			$pos = strpos($myString, $findMe);
			echo $pos;
			echo '<hr>';
		}

		public function toUpper($msg)
		{
			echo '<h1>String to Upper function demo </h1>';
			$msgU = strtoupper($msg);
			echo $msgU;
			echo '<hr>';
		}

		public function toLower($msg)
		{
			echo '<h1>String to Lower function demo </h1>';
			$msgL = strtolower($msg)
			echo $msgL;
			echo '<hr>';
		}

		public function htmlEnt($msg3)
		{
			echo '<h1>HTML Entities function demo </h1>';
			$a = htmlentities($msg3);
			echo $a;
			echo '<hr>';
		}

		public function htmlEntDec($msg3)
		{
			echo '<h1>HTML Entities Decode function demo </h1>';
			$a = html_entity_decode($msg3);
			echo $a;
			echo '<hr>';
		}

		public function rightTrim($msg,$trimStr)
		{
			echo '<h1>Right Trim function demo </h1>';
			$a = rtrim($msg,$trimStr)
			var_dump($a);
			echo '<hr>';
		}

		//ARRAY FUNCTIONS

		public function arrayChunk($array, $chunkSize)
		{
			echo '<h1>Array Chunk function demo </h1>';
			print_r(array_chunk($array, $chunkSize));
			echo '<hr>';
		}

		public function arrayCombine($array1, $array2)
		{
			echo '<h1>Array Combine function demo </h1>';
			print_r(array_combine($array1, $array2));
			echo '<hr>';

		}

		public function arrayDiff($array1, $array2)
		{
			echo '<h1>Array Diff function demo </h1>';
			print_r(array_diff_assoc($array1, $array2));
			echo '<hr>';
		}

		public function arrayDiffKey($array1, $array2)
		{
			echo '<h1>Array Diff Key function demo </h1>';
			print_r(array_diff_key($array1, $array2));
			echo '<hr>';
		}

		public function arrayFill($array, $startInd, $num, $values)
		{
			echo '<h1>Array Fill function demo </h1>';
			$array = array_fill($startInd, $num, $values);
			print_r($array);
			echo '<hr>';
		}

		public function arrayFillKeys($array, $value)
		{
			echo '<h1>Array Fill Keys function demo </h1>';
			$a = array_fill_keys($array, $value);
			print_r($a);
			echo '<hr>';
		}

		public function arrayKeyExists($key,$array)
		{
			echo '<h1>Array Key Exists function demo </h1>';
			if (array_key_exists($key,$array) == true)
			{
				echo $key . ' is in the array';
			}
			echo '<hr>';
		}

		public function arrayKeys($array)
		{
			echo '<h1>Array Keys function demo </h1>';
			print_r(array_keys($array));
			echo '<hr>';
		}

		public function arrayPop($array)
		{
			echo '<h1>Array Pop function demo </h1>';
			$a = array_pop($array);
			print_r($a);
			echo '<hr>';
		}

		public function arraySearch($key,$array)
		{
			echo '<h1>Array Search function demo </h1>';
			$x = array_search($key, $array);
			echo $x;
			echo '<hr>';
		}
		*/
		public function __destruct()
		{
			echo 'I\'m done </br>';
		}
	}
?>
