<?php

interface Handler {
	public function request($level);
	public function setNextHandler(Handler $handler);
}
?>