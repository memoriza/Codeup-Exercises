<?php 
$loop1 = 0;
$loop2 = 100;
$loop3 = 2;


do {

	echo "\$loop is equal to {$loop1}\n";
	$loop1++;

} while ($loop1 <= 100);


do {

	echo "\$loop is equal to {$loop2}\n";
	$loop2 -= 5;

} while ($loop2 >= -10);

do {

	echo "\$loop is equal to {$loop3}\n";
	$loop3 *= $loop3;

} while ($loop3 < 1000000);

 ?>