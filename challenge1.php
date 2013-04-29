<?php

	for ( $i = 1 ; $i < 1000 ; $i++ )
		if ( !($i % 3) || !($i % 5) )
			$sum += $i;

	echo $sum."\n";
?>
