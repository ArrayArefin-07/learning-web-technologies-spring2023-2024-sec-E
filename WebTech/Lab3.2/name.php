<?php

$username = trim($_REQUEST['username']);

// Check if the username is not empty
if ($username == "") {
    echo "Null username/ Input a valid name";
} else {
    // Check if the username contains at least two words
    $wordCount = count(explode(' ', $username));
    
    // Check if the first character is a letter
    $firstCharacter = substr($username, 0, 1);
    $startsWithLetter = ctype_alpha($firstCharacter);

    if ($wordCount >= 2 && $startsWithLetter) {
        echo $username . " is a valid string";
    } else {
        echo "Invalid name. Please make sure it contains at least two words and starts with a letter.";
    }
}

?>
