<?php

/**
 * 觀察者（訂閱者）
 * 
 * @author Nick Lian
 */
interface Observer {

    /**
     * 被觀察者狀態變更通知（發布者發布訊息）
     */
	public function update($message);
}

?>