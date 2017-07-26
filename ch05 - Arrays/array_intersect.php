<?php
// 1.array_intersect()函数进行的比较只有数组值的比较;
// 2.array_intersect_assoc()函数是将数组的值与键值一起比较，而且不会存在array_intersect的情况，适用于较严格的比较；
// 3.array_intersect_key()函数适用于比较两个数组键值的交集，返回的并不只有键值，而是键值和对应的数组值。
$array1 = array("OH","CA","NY","HI","CT");
$array2 = array("OH","CA","HI","NY","IA");
$array3 = array("TX","MD","NE","OH","HI");
$intersection = array_intersect($array1, $array2, $array3);
print_r($intersection);

?>
