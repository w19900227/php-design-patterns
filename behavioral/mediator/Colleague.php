<?php
/**
 * 抽象同事
 * 
 * @author Nick Lian
 */
interface Colleague {
    /**
     * 發言
     */
	public function send($message);

    /*
     * 密語
     */
	public function send($message, $colleague);

    /**
     * 接收訊息
     */
	public function receive($message);
	
    /**
     * 接收密語訊息
     */
	public function receive($message, $colleague);
}

?>