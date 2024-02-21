<?php

$dob = trim($_REQUEST['dateOfBirth']);

if ($dob == ""){
    echo "Please provide your date of birth.";
}else{
    list($year, $month, $day ) = explode('-', $dob);

    if (ctype_digit($day) && ctype_digit($month) && ctype_digit($year)){
        $day = (int)$day;
        $month = (int)$month;
        $year = (int)$year;

        if ($day >= 1 && $day <= 31 && $month >=1 && $month <=12 && $year >= 1953 && $year <= 1998) {
            echo "$dob is Valid Date of Birth";
        } else{
            echo "Date of Birth Invalid. Please Enter a Valid DoB in Between Range.";
        }
    } else{
        echo "Invalid DoB, Enter a Valid Date of Birth.";
    }

}

?>