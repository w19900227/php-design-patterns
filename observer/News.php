<?php

include_once "Observable.php";
/**
 * 新聞發布者
 * 
 * @author Nick Lian
 */
class News implements Observable {

    /**
     * 訂閱者列表
     */
    private $observers=array();

	public function addObserver(Observer $observer) {
		array_push($this->observers, $observer);
	}

	public function removeObserver(Observer $observer) {
		$position = 0;
		foreach ($this->observers as $viewer) {
			// var_dump($viewer==$observer);
			if ($viewer == $observer) {
				array_splice($this->observers, $position, 1);
			}
			$position++;
		}
	}

	public function notify($message) {
		foreach ( $this->observers as $observer ) {
			$observer->update($message);
		}
	}
}

?>