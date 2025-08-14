<?php
$age = 19;
if ($age >= 0 && $age <= 12) {
    echo "You are a child"; 
} 
elseif ($age >= 13 && $age <= 17) {
    echo "You are a teenager";
}
elseif ($age >= 18 && $age <= 59)
{
    echo "You are an adult";
}
elseif ($age >= 60) {
    echo "You are a senior citizen";
}
else {
    echo "Invalid";
}

?>