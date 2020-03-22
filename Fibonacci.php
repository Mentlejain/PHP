<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Series</title>
</head>
<body>
	Enter a limit:
	<form method="post">
		<input type="number" name="number" min="0">
		<button type="Submit">Enter</button>
	</form>
	<?php
		function fibonacci($n)
		{
			if($n==0)
				return 0;
			elseif ($n==1) 
				return 1;
			else
				return fibonacci($n-1)+fibonacci($n-2);
		}
		if($_POST)
		{
			$n=$_POST['number'];
			echo "Fibonacci series:";
			for($i=0;$i<$n;$i++)
				echo fibonacci($i)." ";
		}
	?>
</body>
</html>