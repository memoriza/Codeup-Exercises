<?php 
$loop = 2;

do {

	echo "\$loop is equal to {$loop}\n";
	$loop *= $loop;

} while ($loop < 1000000);

 ?>