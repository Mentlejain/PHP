<?php
	$color = array('White','Green','Red');
	$c= implode(",", $color);
	echo "$c";
	sort($color);
	echo'<ul>';
	for($i=0;$i<count($color);$i++)
	{
		echo"<li>$color[$i]</li>";
	}
	echo'</ul>';
?>
