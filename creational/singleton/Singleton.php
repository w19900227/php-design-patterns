<?php

/**
 * Singleton Pattern(獨體模式)
 * 
 * 將class的建構式宣告為private, 讓外界只能透過method取得實例, 
 * 確保外部每次取得的都是同一個Singleton實例
 * 
 * @author Nick Lian
 */
class Singleton {

    /**
     * 使用靜態變數記錄Singleton, 並建立實例
     */
    private $singleton;

    public function Singleton() {
    	$this->singleton = new Singleton();
    }

    /**
     * 讓外部只能透過這個method取得Singleton實例
     */
    public function getInstance() {
    	return $this->singleton;
    }

}

?>