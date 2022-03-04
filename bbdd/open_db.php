<?php
$conn = mysqli_connect("localhost", "Pol", "ThatzWeather");
if (!$conn) {
    $log->error('Could not connect: ' . mysql_error());
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($conn,"thatzweather_pol") or die('Could not select thatzweather_pol database.');
mysqli_set_charset($conn, 'utf8');
?>