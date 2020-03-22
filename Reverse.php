<!DOCTYPE html>
<html>
<head>
	<title>Reversing a string</title>
</head>
<body>
	Enter a string:
	<form method="post">
		<input type="text" name="string">
		<button type="Submit">Enter</button>
	</form>
</body>
</html>
<?php
	if($_POST)
	{
		$str=$_POST['string'];
		for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++)  
	    { 
	        $temp = $str[$i]; 
	        $str[$i] = $str[$j]; 
	        $str[$j] = $temp; 
	    }
		echo $str;
	}
?>
