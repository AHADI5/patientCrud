<?php 
include("../config/config.php");
if (isset($_POST["id"])) {
    $id = $_POST['id'];
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
    
    $requette = 'UPDATE patient SET nom=:nom,postnom=:postnom,
    gender=:gender,age=:age,email=:email,contactnumber=:contactnumber,
    height=:height ,weight=:weight,
    bloodgroup=:bloodgroup,bloodpressure=:bloodpressure,pulse=:pulse,
    respiration=:respiration WHERE id_patient = :id';
    $statement = $db ->prepare($requette);
    $execution = $statement -> execute(
        [
            'id'=> $id,
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
    
}