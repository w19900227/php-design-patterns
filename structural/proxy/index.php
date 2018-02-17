<?php
include_once "Proxy.php";
/**
 * Proxy Pattern(代理模式)
 * 
 * @author Nick Lian
 */


// 委任Lian律師
$proxy = new Proxy("Lian律師");

// 在法庭答辯
$proxy->speak("Hello everyone");

?>