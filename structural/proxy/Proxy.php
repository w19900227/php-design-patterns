<?php

include_once "Subject.php";
/**
 * 真實的身份
 * 
 * @author Nick Lian
 */
class Proxy implements Subject {   
    /**
     * 被代理人
     */
    private $subject;
 
    /**
     * 姓名
     */
    private $name;

    /**
     * 建構式傳入被代理人與代理人自已的姓名
     * 
     * @param realSubject
     * @param name
     */
    public function Proxy(Subject $realSubject, $name) {
    	$this->subject = $realSubject;
    	$this->name = $name;
    }

    public function speak($words) {
    	echo $this->name . "代表 ";
    	$this->subject->speak($words);
    }
}

?>