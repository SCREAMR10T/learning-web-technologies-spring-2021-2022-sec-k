<?php

	$studentArr =  [1, 'SHAH MD.SAKIL ', 3.28, "shahsakil@gmail.com"];
	$element = 1;
	$check = false;
	foreach ($studentArr as $value) 
	{
		if($value === $element)
		{
			echo "Search element found <br> Element: $value";
			$check = true;
			break;
		}
	}

	if($check==false) echo "<br> Element not found...";
?>