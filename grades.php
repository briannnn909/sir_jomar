<?php
$score = 80;
$attendance = 85;

if ($score >= 80) {
    if ($attendance >= 85) {
        echo "Passed with honors";
    } elseif ($attendance >= 80) {
        echo "Passed but needs to improve attendance";
    }
} else {
    echo "Failed";
}
?>
