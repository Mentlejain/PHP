<!DOCTYPE html>
<html>
<head>
	<title>Checking for Palindrome</title>
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
	function is_palindrome($str)
	{
		$s=str_replace(' ', '', $str);
		for($i=strlen($s)-1, $j=0; $j<$i; $i--, $j++)  
	    { 
	        if($s[$j]!=$s[$i])
	        	return false; 
	    }
	    return true;
	}
	if($_POST)
	{
		$str=$_POST['string'];
		if (is_palindrome($str)) 
			echo "String is a plaindrome";
		else
			echo "String is not a palindrome";
	}
?>
