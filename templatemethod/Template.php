<?php
/**
 * Template Method Pattern(範本方法模式)
 * 
 * 宣告一個method可執行一套完整的演算法,
 * 將演算法中相異的部份宣告為abstract method讓子類別實作,
 * 如此便可將變化獨立出來, 封裝不會變化的部份,
 * 若需多一個項目只要增加一實作class即可
 * 
 * @author Nick Lian
 */
abstract class Template {
    /**
     * 於此進行一整串的演算法,
     * 將演算法中相異的地方抽出來, 讓子類別實作
     */
    public function printResume() {
        echo "姓名：" . $this->getName();
        echo "<br />";
        echo "職業：" . $this->getJob();
        echo "<br />";
        echo "年資：" . $this->getSeniority();
    }

	/**
     * 以下為演算法中相異的地方, 供子類別實作
     */
    public function getName() {}
    public function getJob() {}
    public function getSeniority() {}
}

?>