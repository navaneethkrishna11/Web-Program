<?php
  $data = array("Bread"=>30, "Jam"=>35, "Cheese"=>32);
  
  foreach ($data as $key => $value) {
    echo "$key => $value <br>";
  }

  echo "<br><br> Sorted Array : <br>";
  asort($data);
  foreach ($data as $key => $value) {
    echo "$key => $value <br>";
  }
?>
