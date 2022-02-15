<?php

	for ($i=1; $i<=3 ; $i++) 
	{ 
		for ($j=1; $j<=$i ; $j++) 
		{ 
			echo "*";
		}
		echo "<br>";
	}
?>


<?php

	$arr = [

			[1,2,3,'A'],
			[1,2,'B','C'],
			[1,'D','E','F']
	];

	$limit = 2;

	for ($i=0; $i<3; $i++) 
	{
		$temp = $limit;
		for ($j=0; $j<=$temp; $j++) 
		{ 
			echo $arr[$i][$j];
		}
		echo "<br>";
		$limit--;
	}

?>

<?php

	$arr = [

			[1,2,3,'A'],
			[1,2,'B','C'],
			[1,'D','E','F']
	];

	$limit = 3;

	for ($i=0; $i<3; $i++) 
	{
		$temp = $limit;
		for ($j=$temp; $j<=3; $j++) 
		{ 
			echo $arr[$i][$j];
		}
		echo "<br>";
		$limit--;
	}

?>