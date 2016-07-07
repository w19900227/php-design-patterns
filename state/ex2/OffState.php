<?php

class OffState implements IState {
	private $state;

	public function __construct(Context $state) {
		$this->state = $state;
	}

	public function turnNext() {
		echo '下一步：關燈<br />';
		$this->state->setState($this->state->getOnState());
	}

	public function turnLast() {
		echo '上一步：最亮<br />';
		$this->state->setState($this->state->getBrightestLight());
	}
}


?>