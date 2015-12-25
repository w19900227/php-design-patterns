<?php

include_once "Composite.php";
include_once "Leaf.php";

$html = new Composite("html");
$title = new Composite("title");
$head = new Composite("head");
$body = new Composite("body");

$div1 = new Composite("div1");
$div2 = new Composite("div2");
$div3 = new Composite("div3");


$p1 = new Leaf("p1");
$p2 = new Leaf("p2");
$p3 = new Leaf("p3");

        
// 組裝div，第二個div空著，看看結果有沒有如我們所願
$div1->add($p1);
$div2->add($p2);
$div3->add($p3);

// 組裝body
$body->add($div1);
$body->add($div2);
$body->add($div3);
// $body->display();

// 組裝head
$head->add($title);

// 組裝html
$html->add($head);
$html->add($body);

// 顯示，HTML為第1層
$html->display(0);

?>