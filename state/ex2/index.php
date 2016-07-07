<?php

function __autoload($class_name)
{
	include $class_name . '.php';
}

$context = new Context();
$context->next();
$context->next();
$context->next();
$context->next();
$context->next();

echo '<hr />';
$context->last();
$context->last();
$context->last();
$context->last();

?>