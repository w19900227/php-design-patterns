<?php
include_once "RealSubject.php";
include_once "Proxy.php";
/**
 * Proxy Pattern(代理模式)
 * 
 * @author Nick Lian
 */

// 本人
$nick = new RealSubject("Nick");

// 委任Lian律師
$royProxy = new Proxy($nick, "Lian律師");

// 在法庭答辯
$royProxy->speak("Hello everyone");

?>