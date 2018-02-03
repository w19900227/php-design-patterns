<?php

include_once "Memento.php";
/**
 * 遊戲角色，備忘錄模式中的Originator
 * 
 * @author Nick Lian
 */
class GameRole {    
    /**
     * 生命力
     */
	private $vit;
    /**
     * 法力
     */
	private $mana;

    /**
     * 建構式中傳入生命力與法力
     * 
     * @param vit
     *        生命力
     * @param mana
     *        法力
     */
    public function GameRole($vit, $mana) {
    	$this->vit = $vit;
    	$this->mana = $mana;
    }

    /**
     * 將這個角色傳入備忘錄記錄屬性（就是生命力跟法力），
     * 然後回傳備忘錄供外部使用
     */
    public function createMemento() {
    	return new Memento($this);
    }

    /**
     * 傳入備忘錄回復存檔狀態
     * 
     * @param memento
     *        記錄角色狀態的備忘錄
     */
    public function setMemento($memento) {
        $this->vit = $memento->getVit();
        $this->mana = $memento->getMana();
    }


    /**
     * 為了顯示方便覆寫toString
     */
    public function __toString() {
    	return "GameRole [生命力=" . $this->vit . ", 法力=" . $this->mana . "]";
    }

    public function getVit() {
    	return $this->vit;
    }

    public function setVit($vit) {
    	$this->vit = $vit;
    }

    public function getMana() {
    	return $this->mana;
    }

    public function setMana($mana) {
    	$this->mana = $mana;
    }
}

?>