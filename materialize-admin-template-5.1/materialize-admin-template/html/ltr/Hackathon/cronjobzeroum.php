<?php
session_start();
include("conexao.php");

$tbClientsRewards = "SELECT * FROM cliente_recompensa WHERE status = 0";
$resultTbClientsRewards = mysqli_query($mysqli_connection, $tbClientsRewards); 
$dataTbClientsRewards = $resultTbClientsRewards->fetch_assoc();
$idClientReward = $dataTbClientsRewards['idcliente_recompensa'];

$updateTableClientsRewards = "UPDATE cliente_recompensa SET status = '1' WHERE idcliente_recompensa = '$idClientReward' ";

if($mysqli_connection->query($updateTableClientsRewards) === TRUE) 
{
    
}else 
{
   echo "Error: " . $updateTableClientsRewards . "<br>" . $mysqli_connection->error;
}
?>