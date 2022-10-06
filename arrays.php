<?php
$cars = array("Volvo", "BMW", "Audi", "Benz");
$arrLength = count($cars);

echo $arrLength;
echo '<br>';

for ($x = 0 ; $x < $arrLength; $x++){
    echo $cars[$x];
    echo '<br>';
}

$carsList = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  for($row=0; $row < 4; $row++){
    echo 'row number' . $row;
    echo '<ul>';
        for ($col = 0 ; $col <3 ; $col++){
            echo '<li>' .$carsList[$row][$col]. '</li>';
        } 
    echo '</ul>';
  }
?>