<?php

include_once "Man.php";
include_once "Woman.php";
include_once "DriveCar.php";
include_once "OffWork.php";
/**
 * Visitor Pattern(訪問者模式)
 * 
 * 訪問者模式的定義是，作用於某物件結構中各元素的操作，
 * 可以在不改變各元性的狀況下，定義對於這些元素的操作方式
 * 
 * 這麼說有點複雜，簡單想就是假設我們的元素是男人和女人，
 * 我可以用訪問者模式來操作男人和女人這些元素，
 * 這邊使用了兩個範例來示範，
 * 若你要新增一範例，只需要在新增一個類別實作Visitor介面即可，
 * 不必去修改到其它地方
 * 
 * @author Nick Lian
 */


$list = array();
array_push($list, new Man());
array_push($list, new Woman());

// 用開車的觀點來比較男女
foreach ( $list as $l ) {
	$l->accept(new DriveCar());
	echo "<br />";
}

echo "<hr />";

// 用下班後的觀點來比較男女
foreach ( $list as $l ) {
	$l->accept(new OffWork());
	echo "<br />";
}

?>