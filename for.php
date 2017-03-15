<?php

fwrite(STDOUT, "Enter the start of the range");
$start = trim(fgets(STDIN));

fwrite(STDOUT, "Enter the end of the range");
$end = trim(fgets(STDIN));

for ($i = $start; $i <= $end; $i++) {
	if ($i % 2 === 0) {echo $i, PHP_EOL;
	}
}

?>	