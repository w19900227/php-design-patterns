<?php

class BrightestLight implements IState {
	private $state;

	public function __construct(Context $state) {
		$this->state = $state;
	}

	public function turnNext() {
		echo '下一步：最亮<br />';
		$this->state->setState($this->state->getOffState());
	}

	public function turnLast() {
		echo '上一步：稍亮<br />';
		$this->state->setState($this->state->getBrighterLight());
	}
}


?>