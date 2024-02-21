<?php
if (isset($_REQUEST['bloodGroup'])){
    $selectBloodGroup = $_REQUEST['bloodGroup'];

    echo "Selected Blood Group: $selectBloodGroup";
} else{
    echo "Please Select a Blood Group!";
}
?>