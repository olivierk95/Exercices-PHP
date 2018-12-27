<?php
$datetime1 = date_create('now');
$datetime2 = date_create('2016-05-16');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%a jours');
?>