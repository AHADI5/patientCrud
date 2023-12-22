<?php
include("../config/config.php");

$nom = $_POST["name"];
$postNom = $_POST["lastname"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$email = $_POST["email"];
$contactnumber = $_POST["contactnumber"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$bloogroup = $_POST["bloodgroup"];
$bloodpressure = $_POST["bloodpressure"];
$pulse = $_POST["pulse"];
$respiration = $_POST["respiration"];

//INSERTING DATA INTO DATABASE 

$requette = 'INSERT into patient(nom,postnom,
gender,age,email,contactnumber,height,weight,
bloodgroup,bloodpressure,pulse,respiration) VALUES (:nom,:postnom,
:gender,:age,:email,:contactnumber,:height,:weight,
:bloodgroup,:bloodpressure,:pulse,:respiration)';


$statement = $db ->prepare($requette);
$execution = $statement -> execute(
    [
       'nom'=> $nom,
       'postnom'=> $postNom,
       'gender'=> $gender,
       'age'=> $age,
       'email'=> $email,
       'contactnumber'=> $contactnumber,
       'height'=> $height,
       'weight'=> $weight,
       'bloodgroup'=> $bloogroup,
       'bloodpressure'=> $bloodpressure,
       'pulse'=> $pulse,
       'respiration'=> $respiration,
    ]
);

if ($execution) {
    echo "Success";
    header("Location:../views/list_patient.php");
} else {
    echo "Failed";
}
