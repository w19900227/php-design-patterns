<?php

include_once "Context.php";
include_once "GoldMember.php";
include_once "SilverMember.php";
include_once "GeneralMember.php";
/**
 * 執行Strategy Pattern(策略模式)
 * 
 * @author Nick Lian
 */

// 購買商品的各售價List
$priceList = array(200, 300, 500, 850);

// 黃金會員
$goleMemberContext = new Context(new GoldMember());
$goleMemberPayment = $goleMemberContext->getTotalPayment($priceList);
// 白銀會員
$silverMemberContext = new Context(new SilverMember());
$sliverMemberPayment = $silverMemberContext->getTotalPayment($priceList);
// 一般會員
$generalMemberContext = new Context(new GeneralMember());
$generalMemberPayment = $generalMemberContext->getTotalPayment($priceList);

// 列出原價參考
$total = array_sum($priceList);

echo "原價：" . $total . "<br />";
echo "黃金會員應付金額：" . $goleMemberPayment . "<br />";
echo "白銀會員應付金額：" . $sliverMemberPayment . "<br />";
echo "一般會員應付金額：" . $generalMemberPayment . "<br />";

?>