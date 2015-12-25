<?php

include_once "ConcreteComponent.php";
include_once "ConcreteDecorator.php";

// 一則情報
$message = new ConcreteComponent();
// 建立加密(裝飾)者, 並於建構式把情報給加密(裝飾)者
$decorator = new ConcreteDecorator($message);
// 發出加密(裝飾)後的情報
$decorator->request();

?>