<?php require("../controllers/getPatient.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/homepatient.css">
    <link rel="stylesheet" href="../bootstrap-icons/bootstrap-icons.css">
    
</head>
<body>
    <?php include("menu.php") ;?>
    <div class="main-content">
        <p class="title-page">Patients List</p>
        <div class="latest-patients">
               <a href="./addPatient.php"><button class="new"> <i class="bi bi-plus"></i> New Patients</button></a> 
                <div class="latest-list">
                    <table class="patients">
                        <thead >
                            
                            
                            <tr>
                                <td>N°</td>
                                <td>Name</td>
                                <td>Postnom</td>
                                <td>Gender</td>
                                <td>Age</td>
                                <td>Tel</td>
                                <td>Action</td>   
                            </tr>
                            
                        </thead>
                    <tbody>
                        <?php 
                    
                     
                        for ($i=0; $i < count($patientTable); $i++) {
                           
                            $numero = $patientTable[$i]["id_patient"];
                            $nom = $patientTable[$i]["nom"];
                            $postnom = $patientTable[$i]["postnom"];
                            $gender = $patientTable[$i]["gender"];
                            $age = $patientTable[$i]["age"];
                            $email = $patientTable[$i]["email"];
                            $contactnumber = $patientTable[$i]["contactnumber"];
                            $height = $patientTable[$i]["height"];
                            $weight = $patientTable[$i]["weight"];
                            $bloodgroup = $patientTable[$i]["bloodgroup"];
                            $bloodpressure = $patientTable[$i]["bloodpressure"];
                            $pulse = $patientTable[$i]["pulse"];
                            $respiration = $patientTable[$i]["respiration"];
                            echo <<< _END
                                <tr>
                                    <td>$numero</td>
                                    <td>$nom</td>
                                    <td>$postnom</td>
                                    <td>$gender</td> 
                                    <td>$age</td>
                                    <td>$contactnumber</td>
                                    <td>
                                        <a href="view.php?numero=$numero"> <buttton class="view"> <i class="bi bi-eye"></i> </button></a>
                                        <a href="../controllers/delete.php?numero=$numero"> <i class="bi bi-trash"></i> </a>
                                        <a href="modifierForm.php?numero=$numero&nom=$nom&
                                        postnom=$postnom&gender=$gender&age=$age&email=$email&contact=$contactnumber&
                                        height=$height&weight=$weight&boodgroup=$bloodgroup&bloodpressure
                                        =$bloodpressure&pulse=$pulse&respiration=$respiration"> <i class="bi bi-pen"></i> </a>
                                    </td>
                                </tr>

                            _END;
                        }
                        
                        ?>
                           
                    </tbody>
                    </table>
                </div>
            </div>
      

            </div>
    </div>




    <script src="../js/menu.js"></script>
    <!-- <script src="../js/view.js"></script> -->
</body>
</html>