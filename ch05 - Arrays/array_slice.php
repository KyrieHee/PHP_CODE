<?php

   $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
                   "California", "Colorado", "Connecticut");
  #从数组中移除元素，并用新元素取代它：
   $subset = array_slice($states, 4);
     print_r($subset);

?>
