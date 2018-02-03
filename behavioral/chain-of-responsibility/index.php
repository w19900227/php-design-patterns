<?php
include_once "level/levelA.php";
include_once "level/levelB.php";
include_once "level/levelC.php";

$level_a = new levelA();
$level_b = new levelB();
$level_c = new levelC();

$level_a->setNextHandler($level_b);
$level_b->setNextHandler($level_c);

for ( $i=1; $i<6; $i++ ) {
	$result = $level_a->request($i);
	echo $result;
	echo "<br />";
}

?>