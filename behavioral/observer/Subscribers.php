<?php

include_once "Observer.php";
/**
 * 新聞訂閱者
 * 
 * @author Nick Lian
 */
class Subscribers implements Observer {

    /**
     * 訂閱者姓名
     */
    private $name;

    /**
     * 建構式傳入訂閱者姓名
     */
    public function __construct($name) {
    	$this->name = $name;
    }

    public function update($message) {
    	echo sprintf("%s收到新聞快報：%s \n", $this->name, $message);
    	echo "<br />";
    }
}

?>