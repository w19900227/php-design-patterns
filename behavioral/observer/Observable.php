<?php

/**
 * 被觀察者（發布者）
 * 
 * @author Nick Lian
 */
interface Observable {
    /**
     * 增加觀察者
     */
    public function addObserver(Observer $observer);

    /**
     * 移除觀察者
     */
    public function removeObserver(Observer $observer);

    /**
     * 通知觀察者
     */
    public function notify($message);
}

?>