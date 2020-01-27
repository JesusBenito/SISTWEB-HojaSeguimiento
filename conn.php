<?php

//$host      = '67.227.236.164:3306';   /* o localhost  */
// $host      = 'www.vlimcard.com:3306';
$host      = '67.227.236.164:3306';
$user      = 'vlimcard_usrtmpo';
$pass      = 'nf=ikGaVH7@c';
$dbname    = 'vlimcard_control_tiempos';

$conn = new mysqli($host,$user,$pass,$dbname );
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
if ($conn->connect_errno){

    echo "Error, no ha podido conectar a la base de datos: " . $dbname;
    exit();
}

?>