<?php

include_once "Context.php";

$command = "W-RUN:10,S-RUN:5,W-JUMP:3";
$context = new Context();
$action = $context->interpret($command);
echo $action;

?>