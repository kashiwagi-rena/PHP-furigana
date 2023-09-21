<?php
  function getPrice($cnt){
    500 * $cnt;
    if($cnt <= -1){
      var_dump(0);
    }
  }

  getPrice(-3);
?>