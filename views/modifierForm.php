<?php 
$numero = isset($_GET['numero']) ? $_GET['numero'] : '';
$nom = isset($_GET['nom']) ? $_GET['nom'] : '';
$postnom = isset($_GET['postnom']) ? $_GET['postnom'] : '';
$gender = isset($_GET['gender']) ? $_GET['gender'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$contactnumber = isset($_GET['contact']) ? $_GET['contact'] : '';
$height = isset($_GET['height']) ? $_GET['height'] : '';
$weight = isset($_GET['weight']) ? $_GET['weight'] : '';
$bloodgroup = isset($_GET['boodgroup']) ? $_GET['boodgroup'] : '';
$bloodpressure = isset($_GET['bloodpressure']) ? $_GET['bloodpressure'] : '';
$pulse = isset($_GET['pulse']) ? $_GET['pulse'] : '';
$respiration = isset($_GET['respiration']) ? $_GET['respiration'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/addforms.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/homepatient.css">
    <link rel="stylesheet" href="../bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <?php include("menu.php"); ?>
    <div class="add-form">
        <p class="title-page">New Patient</p>
        <form action="../controllers/updatePatient.php" method="post">
            <fieldset>
                <legend>Informations Personnelles</legend>
                <div class="names">
                    <div class="info">
                        
                        <input type="text" name="name" id="name" value="<?php echo $nom ?>" placeholder="Nom">
                    </div>

                    <div class="info">
                       
                        <input type="text" name="lastname" id="lastname" value="<?php echo $postnom?>" placeholder= "Postnom">
                    </div>
                   
                </div>
                <div class="gender-age">
                    <div class="info">
                        <select name="gender" id="gender">
                            <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>
                    <div class="info">
                       
                        <input type="number" name="age" id="age" value="<?php echo $age ?>" placeholder ="Age">
                    </div>
                </div>

                <div class="contacts">
                    <div class="info">
                    
                        <input type="email" name="email" id="email" value="<?php echo $email ?>" placeholder ="Email">
                    </div>
                    <div class="info">
                       
                        <input type="tel" name="contactnumber" id="contact-number" value=" <?php echo $contactnumber ?>" placeholder = "Tel">
                    </div>
                </div>
                
            </fieldset>

            <fieldset>
                <legend>Informations Medicales</legend>
                <div class="height-weight">
                    <div class="info">
                   
                        <input type="number" name="height" id="height" value="<?php echo $height ?>" placeholder="Taille">
                    </div>
                    <div class="info">
                       
                        <input type="number" name="weight" id="weight" value="<?php echo $weight ?>" placeholder ="Poids">
                    </div>
                </div>
                <div class="bood-group-pressure">
                    <div class="info">
                         <input type="text" name="bloodgroup" id="bloodgroup" value="<?php echo $bloodgroup ?>" placeholder ="Groupe Sanguin">
                    </div>
                    <div class="info"> 
                        <input type="text" name="bloodpressure" id="blooodpressure" value=" <?php echo $bloodpressure ?> " placeholder ="Pression Arterielle">
                    </div>
                </div>
                <div class="pulse-respiration">
                     <div class="info">
                         <input type="text" name="pulse" id="pulse" placeholder = "Pulse" value=" <?php echo $pulse ?>">
                    </div>

                     <div class="info">
                       
                         <input type="text" name="respiration" id="respiration" placeholder ="Respiration" value=" <?php echo $respiration ?>">
                    </div>
                    <div class="info">
                       
                       <input type="text" name="id" id="id" placeholder ="Respiration"  value =" <?php echo $numero ?>">
                  </div>
                </div>
                
            </fieldset>
            <div class="send"><button type="submit">Add New Patient</button> </div>
        </form>
    </div>
    

    <script src="../js/menu.js"></script>
</body>
</html>