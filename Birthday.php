<!DOCTYPE html>
<html>
<head>
	<title>Birthday Counter</title>
</head>
<body>
	Enter date of birth:
	<form method="post">
		<input type="date" name="dob">
		<button type="Submit">Enter</button>
	</form>
</body>
</html>
<?php
		if($_POST)
		{
			$date=$_POST['dob'];
			$today=date("Y-m-d");
			$bday=date("d",$date)#date("m",$date))date("Y",$today));
			if($today>$bday)
			{
				$days_left=date_diff(date_create($bday),date_create($today),true);
				echo 'Days Count - '.$days_left->format("%a");
			}
			else
			{
				$days_left=date_diff(date_create($bday),date_create($today),true);
				echo 'Days Count - '.$days_left->format("%a");
			}
		}
?>