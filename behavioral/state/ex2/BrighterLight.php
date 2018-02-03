<?php

class BrighterLight implements IState {
	private $state;

	public function __construct(Context $state) {
		$this->state = $state;
	}

	public function getStatus() {
		return 'BrighterLight';
	}

	public function turnNext() {
		echo '下一步：稍亮<br />';
		$this->state->setState($this->state->getBrightestLight());
	}

	public function turnLast() {
		echo '上一步：開燈<br />';
		$this->state->setState($this->state->getOnState());
	}
}


?>