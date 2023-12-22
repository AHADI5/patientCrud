<?php require("../controllers/getPatient.php"); ?>
<?php 
$id = $_GET["numero"];
$requette = 'SELECT * FROM patient WHERE id_patient = :id';
$statement = $db ->prepare($requette);
$execution = $statement -> execute(array(':id'=> $id));
if($execution){
    $data = $statement -> fetch() ;
} 
?>
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
        <p class="title-page"><?php echo $data['nom'] .' ' . $data['postnom']?></p>
        <div class="latest-patients">
            <div class="informations-displaying flex">
                <div class="fields-values flex">
                    <div class="fields-values-perso">
                        <h4>Personal Informations</h4>
                        <div class="personal-info flex">
                            <div class="fields grid">
                                    <span>Name  </span>
                                    <span>Gender </span>
                                    <span>Age </span>
                                    <span>Mail </span>
                                    <span>Phone </span>
                            </div>
                            <div class="values grid">
                                    <span> <?php echo $data['nom'] ?></span>
                                    <span><?php echo $data['postnom'] ?></span>
                                    <span><?php echo $data['gender'] ?></span>
                                    <span><?php echo $data['email'] ?></span>
                                    <span><?php echo $data['contactnumber'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="fiels-values-med">
                        <h4>Medical Informations</h4>
                        <div class="medical-info flex">
                        <div class="fields grid">
                                <span>Height </span>
                                <span>Weight</span>
                                <span>Blood group </span>
                                <span>Blood Pressure</span>
                                <span>Pulse</span>
                        </div>
                        <div class="values grid">
                                <span> <?php echo $data['height'] ?></span>
                                <span> <?php echo $data['weight'] ?></span>
                                <span> <?php echo $data['bloodgroup'] ?></span>
                                <span> <?php echo $data['bloodpressure'] ?> P</span>
                                <span> <?php echo $data['pulse'] ?></span>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>




    <script src="../js/menu.js"></script>
    <!-- <script src="../js/view.js"></script> -->
</body>
</html>
