<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/homepatient.css">
    <link rel="stylesheet" href="../bootstrap-icons/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <?php include("patientmenu.php") ;?>
    <div class="main-content ">
        <div class="welcomeback-summary grid">
            <div class="welcomeback grid">
               <div class="welcome-text grid">
                    <div class="text">
                        <p>Welcome Back !</p>
                         <p>Dashboard</p>
                    </div>
                    <div class="admin-img-welcome">
                        <img src="./img/back3.jpeg" alt="welcome">
                    </div>
               </div>
               <div class="summary grid">
               <div class="informations flex">
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
                                    <span>Gloire Ahadi</span>
                                    <span>Masculin</span>
                                    <span>22 ans</span>
                                    <span>gloireahadi9@gmail.com</span>
                                    <span>+243 991 584 663</span>
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
                                <span>50 kgs</span>
                                <span>1.5 m</span>
                                <span>O+</span>
                                <span>111 p</span>
                                <span>NOne</span>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            
            </div>
        </div>

       
    </div>
    <div class="copyrigth">CopyRights &copy; 2023 Docile Wakomya</div>
    <script src="./js/menu.js"></script>
</body>
</html>