<?php
class Computer {
	private $mb;
	private $power;
	private $cpu;
	private $ram;
	private $hdd;
	private $vga;

	public function setMb($mb) {$this->mb = $mb; }
	public function getMb() { return $this->mb; }

	public function setPower($power) {$this->power = $power; }
	public function getPower() { return $this->power; }

	public function setCpu($cpu) {$this->cpu = $cpu; }
	public function getCpu() { return $this->cpu; }

	public function setRam($ram) {$this->ram = $ram; }
	public function getRam() { return $this->ram; }

	public function setHdd($hdd) {$this->hdd = $hdd; }
	public function getHdd() { return $this->hdd; }

	public function setVga($vga) {$this->vga = $vga; }
	public function getVga() { return $this->vga; }

	public function __toString() {
        return "Computer [mb=" . $this->getMb() . 
        ", power=" . $this->getPower() . 
        ", cpu=" . $this->getCpu() . 
        ", ram=" . $this->getRam() . 
        ", hdd=" . $this->getHdd() . 
        ", vga=" . $this->getVga() . "]";
	}
}

?>