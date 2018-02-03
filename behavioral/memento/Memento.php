<?php

include_once "GameRole.php";
/**
 * 記錄GameRole的備份資料（就像遊戲的存檔功能）
 * 
 * @author Nick Lian
 */
class Memento {
    /**
     * 生命力
     */
	private $vit;

    /**
     * 法力
     */
	private $mana;
    /**
     * 於建構式傳入遊戲角色將角色屬性備份至備忘錄中
     * 
     * @param gameRole
     *        要備份的遊戲角色
     */
    public function Memento($gameRole) {
    	$this->vit = $gameRole->getVit();
    	$this->mana = $gameRole->getMana();
    }
    
    /**
     * 取得備份的遊戲角色
     */
    public function getBackupState() {
    	return new GameRole($this->vit, $this->mana);
    }

    public function getVit() {
    	return $this->vit;
    }

    public function getMana() {
    	return $this->mana;
    }
}

?>