<!DOCTYPE html>
<html>
<head>
	<title>Odd Sum</title>
</head>
<body>
	<form method="post">
		Enter limit:
		<input type="number" name="limit" min="0">
		<button type="submit">Enter</button>
	</form>
</body>
</html>
<?php
	function odd_sum($n)
	{
		$sum=0;
		for($i=1;$i<=$n;$i++)
		{
			$sum+=(2*$i)-1;
		}
		return $sum;
	}
	if($_POST)
	{
		$n=$_POST['limit'];
		echo "Sum=".odd_sum($n);
	}
?>