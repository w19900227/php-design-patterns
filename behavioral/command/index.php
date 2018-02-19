<?php

include_once "command/LightCommandee.php";
include_once "command/LightTurnOnCommand.php";
include_once "command/LightTurnOffCommand.php";

$light_commandee = new LightCommandee();

$light_turn_on_command = new LightTurnOnCommand($light_commandee);
$light_turn_on_command->execute();
echo "<br />";
$light_turn_off_command = new LightTurnOffCommand($light_commandee);
$light_turn_off_command->execute();

?>