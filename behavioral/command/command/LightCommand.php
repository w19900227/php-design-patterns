<?php

abstract class LightCommand 
{
    protected $lightCommandee;

    function __construct($lightCommandee_in) {
        $this->lightCommandee = $lightCommandee_in;
    }

	abstract function execute();
}

?>