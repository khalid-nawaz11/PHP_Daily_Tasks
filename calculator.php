<?php

	class Calculator
	{

		public $num1,$num2;
     
		
		public function Calculator($val1,$val2)
		{
			$num1=$val1;
			$num2=$val2;
		}

		public function addition($val1,$val2)
		{
			return $val1 + $val2;
		}

		public function subtraction($val1,$val2)
		{
			return $val1 - $val2;
		}

		public function multiply($val1,$val2)
		{
			return $val1 * $val2;
		}

		public function divide($val1,$val2)
		{
			return $val1 / $val2;
		}

		
	}



	if(isset($_POST['operation']))
	{
		$n1=$_POST['num1'];
		$n2=$_POST['num2'];
		$op=$_POST['operation'];
		$calculate = new Calculator($n1,$n2);
		$result=$calculate->addition($n1,$n2);
		if($op=='+')
		{
			$result=$calculate->addition($n1,$n2);
		}
		else if($op=='-')
		{
			$result=$calculate->subtraction($n1,$n2);
		}

		else if($op=='*')
		{
			$result=$calculate->multiply($n1,$n2);
		}

		else if($op=='/')
		{
			$result=$calculate->divide($n1,$n2);
		}


		
	}




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
</head>
<body>


	<h1>Simple Calculator</h1>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

		<h2>First Number  <input type="number" name="num1" placeholder="Enter Number 1"></h2>
		
		<h2>Second Number <input type="number" name="num2" placeholder="Enter Number 2"></h2>

		
		<input type="submit" value="+" name="operation">
		<input type="submit" value="-" name="operation">
		<input type="submit" value="*" name="operation">
		<input type="submit" value="/" name="operation">


		<h2>Result <input type="number" id="result" value="<?= $result ?>" disabled> </h2>

	</form>




</body>
</html>


