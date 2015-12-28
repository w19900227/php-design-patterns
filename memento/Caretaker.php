<?php

/**
 * 負責備忘錄的管理
 * 
 * @author Nick Lian
 */
class Caretaker {
    
    /**
     * 備忘錄
     */
	private $memento;

	public function getMemento() {
		return $this->memento;
	}

	public function setMemento($memento) {
		$this->memento = $memento;
	}
}

?>