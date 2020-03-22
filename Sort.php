<?php
	$num = array('7','2','3','1','9');
	echo 'Unsorted array:';
	foreach ($num as $i) 
	{
		echo "$i ";
	}
	echo"<br>";
	sort($num);
	echo 'Sorted array:';
	foreach ($num as $i) 
	{
		echo "$i ";
	}
?>