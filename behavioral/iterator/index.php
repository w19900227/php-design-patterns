<?php

include_once "ConcreteAggregate.php";

// 建一個容器，並新增5個元素
$aggregate = new ConcreteAggregate();
$aggregate->add("o1");
$aggregate->add("o2");
$aggregate->add("o3");
$aggregate->add("o4");
$aggregate->add("o5");

// 刪除第3個元素
$aggregate->remove("o3");

// 取得迭代器並列印
$iterator = $aggregate->iteratore();
// var_dump($iterator);
while ($iterator->hasNext()) {
    $o = $iterator->next();
    echo $o;
    echo "<br />";
}
?>