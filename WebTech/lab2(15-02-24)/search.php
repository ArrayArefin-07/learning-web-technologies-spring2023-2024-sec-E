<?php
$numbers = array(2, 5, 8, 12, 18, 22, 27, 31);


$searchElement = 27;

$found = false;

foreach ($numbers as $number) {
    if ($number == $searchElement) {
        $found = true;
        break; 
    }
}


if ($found) {
    echo "Element $searchElement found in the array.";
} else {
    echo "Element $searchElement not found in the array.";
}
?>
