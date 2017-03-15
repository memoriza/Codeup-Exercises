<?php

fwrite(STDOUT, "Enter the start of the range");
$start = trim(fgets(STDIN));

fwrite(STDOUT, "Enter the end of the range");
$end = trim(fgets(STDIN));

for ($i = $start; $i <= $end; $i++) {
	echo $i, PHP_EOL;
}


?>	