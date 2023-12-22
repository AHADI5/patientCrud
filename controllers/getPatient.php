<?php 

include("../config/config.php");
function getPatients($connect){
    $requette = 'SELECT * FROM patient';
    $statement = $connect ->prepare($requette);
    $execution = $statement -> execute([]);
    $patient = [];
    if($execution){
        while ( $data = $statement -> fetch()) {
            $patient[] = $data;
        }
        return $patient;
    } else {
        return [];
    }
}

$patientTable = getPatients($db);

