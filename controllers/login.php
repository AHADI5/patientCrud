<?php
include("../config/config.php");

    $password = $_POST['password'];
    $mail = $_POST['mail'];


$requette = 'SELECT * FROM Admin';
$statement  = $db -> prepare($requette) ;
$execution = $statement -> execute(array()) ;

if ($execution) {
    $data = $statement -> fetch(PDO::FETCH_ASSOC) ;
    
    if ($data['password'] == $password && $data['mail'] == $mail) {
        session_start();
       $_SESSION['admin'] = $data;
       header('Location:../views/admin_home.php');
    } else{
        header ('Location:../views/login.php');
        var_dump($data);
        echo $password;
    }
} 

