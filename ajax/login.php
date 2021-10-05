<?php
    include '../config/DataBase.php';
    $usr = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM users WHERE Email='$usr' AND Password='$pass'";

    $res = mysqli_query($conexion,$query);

    if(mysqli_num_rows($res) == 1){
        echo 1;
    } else {
        echo 2;
    }

?>