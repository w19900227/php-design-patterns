<?php

include_once "Subject.php";
include_once "RealSubject.php";

/**
 * 真實的身份
 * 
 * @author Nick Lian
 */
class Proxy implements Subject {   
    /**
     * 本人
     */
    private $subject = null;
 
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
    public function __construct($name) {
        if ($this->subject == null) {
            $this->subject = new RealSubject("Nick");
        }
    	$this->name = $name;
    }

    public function speak($words) {
    	echo $this->name . "代表 ";
    	$this->subject->speak($words);
    }
}

?>