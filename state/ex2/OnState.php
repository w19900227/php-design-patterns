<?php
// include_once "IState.php";
// include_once "Context.php";

class OnState implements IState {
	private $state;

	public function __construct(Context $state) {
		$this->state = $state;
	}

	public function turnNext() {
		echo '下一步：開燈<br />';
		$this->state->setState($this->state->getBrighterLight());
	}

	public function turnLast() {
		echo '上一步：關燈<br />';
		$this->state->setState($this->state->getOffState());
	}
}


?>