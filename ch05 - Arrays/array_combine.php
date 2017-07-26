<?php
#通过合并两个数组来创建一个新数组，其中的一个数组元素为键名，另一个数组元素为键值
$abbreviations = array("AL","AK","AZ","AR");
$states = array("Alabama","Alaska","Arizona","Arkansas");
$stateMap = array_combine($abbreviations,$states);
print_r($stateMap);

?>
