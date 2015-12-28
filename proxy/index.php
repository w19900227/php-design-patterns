<?php
include_once "RealSubject.php";
include_once "Proxy.php";
/**
 * Proxy Pattern(代理模式)
 * 
 * @author Nick Lian
 */

// 本人
$roy = new RealSubject("Nick");
// 委任蘇律師
$royProxy = new Proxy($roy, "Lian律師");
// 在法庭答辯
$royProxy->speak("Hello everyone");

?>