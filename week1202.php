<?php
function day_name(){
    $day1 = "Monday";
    $day2 = "Tuesday";
    $day3= "Wednesday";

    // return [$day1,$day2,$day3];
    return array($day1,$day2,$day3);
}
// $days = day_name();
// list($day1,$day2,$day3) = day_name();
list($day_1,$day_2,$day_3) = day_name();
// print($days[0].','.$days[1].','.$days[2]);
// print($day1.','.$day2.','.$day3);
print($day_1.','.$day_2.','.$day_3);

?>