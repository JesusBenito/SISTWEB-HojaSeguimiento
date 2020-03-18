<?php

if (isset($_POST['us']) && isset($_POST['pw'])) {
    include_once '../conn.php';

    $user = mysqli_real_escape_string($conn, $_POST['us']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pw']);

    $user = utf8_decode($user);
    $pwd = utf8_decode($pwd);
    
    $sql = $conn->query("SELECT * FROM colaboradores WHERE numero_colaborador = $user AND pwd = $pwd");
    
    if(mysqli_num_rows($sql) == 0) {
        echo 'fracaso';
    } else {
        echo 'exito';
    }
}


?>