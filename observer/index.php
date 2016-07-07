<?php
include_once "News.php";
include_once "Subscribers.php";
/**
 * Observer Pattern(觀察者模式)
 * 
 * 又稱發布訂閱模式
 * 
 * 定義「發布者」與「訂閱者」兩個介面，
 * 發布者可根據訂閱者介面，
 * 使用相同的方式通知所有訂閱者，
 * 訂閱者只需要實作被通知後的行為即可
 * 
 * @author Nick Lian
 */

// 建立發布者
$news = new News();

// 建立兩個訂閱者
$nick = new Subscribers("Nick");
$lian = new Subscribers("Lian");
$test = new Subscribers("test");
$aa = new Subscribers("aa");

// 訂閱
$news->addObserver($lian);
$news->addObserver($nick);
$news->addObserver($test);
$news->addObserver($aa);

// 發布訊息
$news->notify("颱風警報");

echo '<hr />';

// clean order
$news->removeObserver($nick);
$news->notify("颱風警報");


?>