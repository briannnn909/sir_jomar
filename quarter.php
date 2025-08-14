<?php
    $rate_per_units = 550;
    $subject1_units = 3;
    $subject2_units = 5;
    $subject3_units = 4;

    $total_units = $subject1_units + $subject2_units + $subject3_units;
    $total_tuition = $total_units * $rate_per_units;

    if ($total_tuition >= 5000 && $total_tuition <= 7999.99 ){
        $discounted = $total_tuition * 0.05;
        $final_tuition =  $total_tuition - $discounted;
    }
    elseif($total_tuition >= 8000 && $total_tuition <= 9999.99){
        $discounted = $total_tuition * 0.10;
        $final_tuition =  $total_tuition - $discounted;
    }
    elseif($total_tuition >= 10000){
        $discounted = $total_tuition * 0.15;
        $final_tuition =  $total_tuition - $discounted;
    }
    elseif ($total_tuition <= 5000){
        $discounted = $total_tuition * 0;
        $final_tuition =  $total_tuition - $discounted;
    }

    echo "<br>Total Units : $total_units";
    echo "<br>Total Tuition : $total_tuition";
    echo "<br>Discount Applied : $discounted";
    echo "<br>Final Tuition : $$final_tuition";
?>