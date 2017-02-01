<?php

$array = array();
for ($i=0; $i < 65537; $i++) {
	$array = array($array);
}

json_encode($array, 0, 551);
switch (json_last_error()) {
	case JSON_ERROR_NONE:
		echo 'OK' . PHP_EOL;
	break;
	case JSON_ERROR_DEPTH:
	break;
}

json_encode($array, -1, 540);
switch (json_last_error()) {
	case JSON_ERROR_NONE:
		echo 'OK' . PHP_EOL;
	break;
	case JSON_ERROR_DEPTH:
		echo 'ERROR' . PHP_EOL;
	break;
}
