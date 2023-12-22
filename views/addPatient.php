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
        <form action="../controllers/addPatient.php" method="post">
            <fieldset>
                <legend>Informations Personnelles</legend>
                <div class="names">
                    <div class="info">
                        
                        <input type="text" name="name" id="name" placeholder="Nom">
                    </div>

                    <div class="info">
                       
                        <input type="text" name="lastname" id="lastname" placeholder= "Postnom">
                    </div>
                   
                </div>
                <div class="gender-age">
                    <div class="info">
                        <select name="gender" id="gender">
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>
                    <div class="info">
                       
                        <input type="number" name="age" id="age" placeholder ="Age">
                    </div>
                </div>

                <div class="contacts">
                    <div class="info">
                    
                        <input type="email" name="email" id="email" placeholder ="Email">
                    </div>
                    <div class="info">
                       
                        <input type="tel" name="contactnumber" id="contact-number" placeholder = "Tel">
                    </div>
                </div>
                
            </fieldset>

            <fieldset>
                <legend>Informations Medicales</legend>
                <div class="height-weight">
                    <div class="info">
                   
                        <input type="number" name="height" id="height" placeholder="Taille">
                    </div>
                    <div class="info">
                       
                        <input type="number" name="weight" id="weight" placeholder ="Poids">
                    </div>
                </div>
                <div class="bood-group-pressure">
                    <div class="info">
                         <input type="text" name="bloodgroup" id="bloodgroup" placeholder ="Groupe Sanguin">
                    </div>
                    <div class="info"> 
                        <input type="text" name="bloodpressure" id="blooodpressure" placeholder ="Pression Arterielle">
                    </div>
                </div>
                <div class="pulse-respiration">
                     <div class="info">
                         <input type="text" name="pulse" id="pulse" placeholder = "Pulse">
                    </div>

                     <div class="info">
                       
                         <input type="text" name="respiration" id="respiration" placeholder ="Respiration">
                    </div>
                </div>
                
            </fieldset>
            <div class="send"><button type="submit">Add New Patient</button> </div>
        </form>
    </div>
    

    <script src="../js/menu.js"></script>
</body>
</html>