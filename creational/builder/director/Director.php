<?php
include_once "machines/Builder.php";
class Director {
	private $builder;

	public function __construct(Builder $builder) {
		$this->builder = $builder;
	}

	public function createComputer() {
		$this->builder->setMb();
        $this->builder->setPower();
        $this->builder->setCpu();
        $this->builder->setRam();
        $this->builder->setHdd();
        $this->builder->setVga();
        return $this->builder->buildComputer();
	}

}
?>