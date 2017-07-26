<?php

$state = array("Delaware","Pennsylvania","New Jersey");
#反转数组中所有的键以及它们关联的值：
$state = array_flip($state);
print_r($state);

?>
