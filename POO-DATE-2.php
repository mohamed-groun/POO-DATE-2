<?php
$date1 = date('Y-m-d',mktime(0,0,0,3,3,1993)); // Date du jour
setlocale(LC_TIME, "fr_FR","French");
echo strftime("%A ", strtotime($date1));