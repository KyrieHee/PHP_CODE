<?php

$cards = array("jh","js","jd","jc","qh","qs","qd","qc",
               "kh","ks","kd","kc","ah","as","ad","ac");
// shuffle the cards 把数组中的元素按随机顺序重新排序
shuffle($cards);
print_r($cards);
// Use array_chunk() to divide the cards into four equal "hands"把数组分割为带有4个元素的数组：
$hands = array_chunk($cards, 4);
print_r($hands);

?>
