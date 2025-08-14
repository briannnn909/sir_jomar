<?php
$age = 20;
$gender = "Male";

echo "Your age is: $age<br>";
echo "Gender: $gender<br>";

if ($gender == "Female") {
    if ($age == 18) {
        echo "You are a female debutant!";
    }
    elseif ($age == 17) {
        echo "Not a female debutant!";
    }
    if ($age == 21) {
        echo "Not a female debutant!";
    }
} elseif ($gender == "Male") {
    if ($age == 18) {
        echo "Not Debutant.";
    } else {
        echo "Not Debutant.";
    }
}
?>