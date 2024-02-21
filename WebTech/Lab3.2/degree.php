<?php
$selectDegree = isset($_REQUEST['degree']) ? $_REQUEST['degree'] : [];
if (count($selectDegree) >= 2) {
    echo "Selected Degree: ". implode(", ", $selectDegree);
} else{
    echo "Please  select at least two degrees.";
}
?>