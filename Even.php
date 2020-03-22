<!DOCTYPE html>
<html>
<head>
	<title>Even</title>
</head>
<body>
	<form method="post">
		Enter limit:
		<input type="number" name="limit">
		<button type="submit">Enter</button>
	</form>
</body>
</html>
<?php
	if($_POST)
	{
		$n=$_POST['limit'];
		for($i=0;$i<$n;$i++)
		{
			echo $i*2 ."<br>";
		}
	}
?>