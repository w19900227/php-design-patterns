<?php
function __autoload($class_name)
{
	include $class_name . '.php';
}

$context = new Context();
// $context->turnOffLight();
$context->turnOnLight();
$context->turnOnLight();
$context->turnOffLight();
$context->turnOffLight();



?>
