<?php 
include("../config/config.php");
$id = $_GET['numero'];
$requette = 'DELETE FROM patient WHERE id_patient = :id';
$statement = $db ->prepare($requette);
$execution = $statement -> execute(array('id'=> $id)); 

if ($execution) {
    header('Location:../views/list_patient.php');
} else {
    echo'failed to delete';
}