<?php

/**
 * 供訪問的元素
 * 
 * @author Nick Lian
 */
interface Element {
	/**
     * 接受一種訪問類別，並在傳入後執行該類別對應的方法
     */
	public function accept($visitor);
	/**
     * 取得姓別
     */
	public function getGender();
}

?>