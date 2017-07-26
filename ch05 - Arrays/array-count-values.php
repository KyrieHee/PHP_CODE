<?php

$states = array("Ohio","Iowa","Arizona","Iowa","Ohio");
#对数组中的所有值进行计数
$stateFrequency = array_count_values($states);
print_r($stateFrequency);

?>
