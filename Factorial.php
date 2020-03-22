<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
</head>
<body>
	Enter a number:
	<form method="post">
		<input type="number" name="number" min="0">
		<button type="Submit">Enter</button>
	</form>
	<?php
		function factorial($n)
		{
			$res=1;
			for($i=$n;$i>0;$i--)
			{
				$res*=$i;
			}
			return $res;
		}
		if($_POST)
		{
			$n=$_POST['number'];
			echo "Factorial=".factorial($n);
		}
	?>
</body>
</html>