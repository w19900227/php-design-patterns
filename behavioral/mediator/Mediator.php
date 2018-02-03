<?php
/**
 * 抽象仲介者
 * 
 * @author Nick Lian
 */
interface Colleague {
    /**
     * 加入討論
     */
	public function join($colleague);

    /*
     * 發言
     */
	public function send($message);

    /**
     * 密語
     */
	public function send($message, $sender, $receiveer);
	
}

?>