<?php
// Get the current hour
date_default_timezone_set("Asia/Kolkata");
echo "Current timezone is : ".date_default_timezone_get()."<br>";
$currentTime=date("H:i:s");
echo "Current time is : ".$currentTime."<br>";
if($currentTime>="12:00:00" && $currentTime<= "13:59:59"){
echo "Good Afternoon, Krish";
}
else if($currentTime>="14:00:00" && $currentTime<= "18:59:59"){
echo "Good Evening, Krish";
}
else if($currentTime>="19:00:00" && $currentTime<= "23:59:59"){
echo "Good Night, Krish";
}
else{
echo "Goog Morning, Krish";
}
?>
