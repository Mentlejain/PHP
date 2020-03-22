<!DOCTYPE html>
<html>
<head>
	<title>Pattern</title>
</head>
<body>
	<form method="post">
		Enter limit:
		<input type="number" name="limit">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
<?php
	if($_POST)
	{
		$n=$_POST['limit'];
		for($i=0;$i<$n;$i++)
		{
			for($j=0;$j<=$i;$j++)
			{
				echo "*";
			}
			echo "<br>";
		}
	}
?>