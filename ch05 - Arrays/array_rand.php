<?php

$states = array("Ohio" => "Columbus", "Iowa" => "Des Moines",
                "Arizona" => "Phoenix");
                #返回包含随机键名的数组：
$randomStates = array_rand($states, 2);
print_r($randomStates);

?>
