<?php

include_once "IosEngineer.php";
include_once "AndroidEngineer.php";
include_once "WebEngineer.php";

class Client {

	private $ios;
	private $android;
	private $web;

	public function __construct() {
		$this->makeConProto();

		$cp_ios = clone $this->ios;
		$cp_android = clone $this->android;
		$cp_web = clone $this->web;

		$tony = clone $cp_ios;
		$this->setEmployee($tony, 'tony', '23', '101');
		$this->showEmployee($tony);

		$joy = clone $cp_android;
		$this->setEmployee($joy, 'joy', '33', '202');
		$this->showEmployee($joy);

		$frank = clone $cp_web;
		$this->setEmployee($frank, 'frank', '23', '303');
		$this->showEmployee($frank);

		$marco = clone $cp_ios;
		$this->setEmployee($marco, 'marco', '31', '102');
		$this->showEmployee($marco);
		
	}

	private function makeConProto() {
		$this->ios     = new IosEngineer();
		$this->android = new AndroidEngineer();
		$this->web     = new WebEngineer();
	}

	private function setEmployee(IPrototype $employee, $name, $age, $dept) {
		$employee->setName($name);		
		$employee->setAge($age);		
		$employee->setDept($dept);		
	}

	private function showEmployee(IPrototype $employee) {
		echo 'Name : ' . $employee->getName() . '<br />';
		echo 'Age : ' . $employee->getAge() . '<br />';
		echo 'Dept : ' . $employee->getDept() . '<br />';
		echo '<hr />';
	}
	
}

$client = new Client();

?>