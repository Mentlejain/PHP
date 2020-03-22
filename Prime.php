<!DOCTYPE html>
<html>
<head>
	<title>Prime</title>
</head>
<body>
	Enter a number:
	<form method="post">
		<input type="number" name="number" min="1">
		<button type="Submit">Enter</button>
	</form>
	<?php
		function is_prime($n)
		{
			for($i=2;$i<=sqrt($n);$i==2?$i++:$i+=2)
			{
				if ($n%$i==0) 
				{
					return false;
				}
			}
			if($n==1)
				return false;
			return true;
		}
		if($_POST)
		{
			$n=$_POST['number'];
			if(is_prime($n))
				echo "Tne number is prime";
			else
				echo "The number is not prime";
		}
	?>
</body>
</html>