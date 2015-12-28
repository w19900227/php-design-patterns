<?php

include_once "GameRole.php";
include_once "Caretaker.php";
/**
 * Memento Pattern(備忘錄模式)
 * 
 * 備忘錄模式在我們生活中隨處可見，
 * 比如像下面的範例中，在遊戲中存檔，
 * 又或者你平常文書處理亦或是在瀏覽器中的上一步
 * 
 * 實作的觀念上很簡單，就是將屬性記錄一份在另一個物件，
 * 這個就如同遊戲中的存檔，
 * 然後像遊戲中有一個存檔的列表，就是一個存檔管理員，
 * 我們也需要一個Caretaker，來管理這個存檔，
 * 這個管理員除了讓我們未來保有彈性外（未來可能不止一份存檔），
 * 還有一點原因是，存檔的管理職責不該由使用者買單，
 * 否則使用者就會承擔了過多的職責
 * 
 * @author Nick Lian
 */

// 一個生命力300，法力100的角色
$role = new GameRole(300, 100);
// 顯示一下現有生命與法力
echo $role;
echo "<br />";


// 打王前存個檔
$caretaker = new Caretaker();
$caretaker->setMemento($role->createMemento());
// 打王失敗死啦
$role->setVit(0);
$role->setMana(20);

// 看一下現在生命與法力（死了生命當然就是0啦）
echo $role;
echo "<br />";

// 幸虧有存檔回復一下吧
$role->setMemento($caretaker->getMemento());

// 確認一下生命與法力，有沒有真的在存檔前狀態
echo $role;

?>