<?php

$num = 65535; /* to be sure to be in wild memory */
$add = str_repeat("128 +", $num);
$gen = (eval(<<<PHP
return function (): \Generator {
	try {
		\$a = 1;
		\$foo = \$a + $add \$a;
		return yield \$foo;
	} finally {
		print "Ok\n";
	}
};
PHP
))();
var_dump($gen->current());
$gen->send("Success");
var_dump($gen->getReturn());

?>
