<?php

include_once "Subject.php";
/**
 * 真實的身份
 * 
 * @author Nick Lian
 */
class RealSubject implements Subject {
 
    /**
     * 姓名
     */
    private $name;

    /**
     * 建構式傳入本人姓名
     * 
     * @param name
     */
    public function __construct($name) {
    	$this->name = $name;
    }

    public function speak($words) {
    	echo $this->name . "說：" . $words;
    }
}

?>