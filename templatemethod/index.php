<?php

include_once "Concrete1.php";
include_once "Concrete2.php";
/**
 * 執行Template Method Pattern(範本方法模式)
 * 
 * @author Nick Lian
 */
$template1 = new Concrete1();
$template2 = new Concrete2();

$template1->printResume();
echo "<hr />";
$template2->printResume();

?>