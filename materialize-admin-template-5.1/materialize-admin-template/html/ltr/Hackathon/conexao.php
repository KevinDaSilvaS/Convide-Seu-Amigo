<?php
$mysqli_connection = new MySQLi("localhost", "wwwctrls_renner", "CTRL11205854ds!", "wwwctrls_renner") ;
if ($mysqli_connection->connect_error) {
    # code...
    echo "desconectado Erro:".$mysqli_connection->connect_error;
}else {
   // echo "conectado";
}
?>