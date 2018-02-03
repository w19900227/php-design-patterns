<?php

include_once "Colleague.php";

class ConcreteColleague implements Colleague {
	private $mediator;
	private $name;

	public function ConcreteColleague($mediator, $name) {
    	$this->mediator = $mediator;
        $this->name = $name;
	}

	public function send($message) {
		echo $this->name . "對大家說：" . $this->message;

		// 跟仲介者說我要說啥就可以了，不用一個個去對每個人說
		$this->mediator->send($message);

	}

	public function send($message, $colleague) {
		echo $this->name . "對" . $this->colleague . "說：" . $this->message;
		$this->mediator->send($message, $this, $colleague);
	}

	public function receive($message) {
		echo $this->name . "接收到訊息：" . $this->message;
	}

	public function receive($message, $colleague) {
		echo $this->name . "接收到" . $this->colleague . "的訊息：" . $this->message;
	}

	public function __toString() {
		return $this->name;
	}

	public function hashCode() {
		$prime = 31;
		$result = 1;
		$result = $prime * $result + (($name == null) ? 0 : "");
		// $result = $prime * $result + (($name == null) ? 0 : $this->name->hashCode());
		return $result
	}

	public function equals() {
		if ($this == $obj)
            return true;
        if ($obj == null)
            return false;
        if (getClass() != $obj->getClass())
            return false;
        $other = (ConcreteColleague) obj;
        if ($name == null) {
            if ($other->name != null)
                return false;
        } else if (!$this->name->equals(other.name))
            return false;
        return true;
	}

}

?>