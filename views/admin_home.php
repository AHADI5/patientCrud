<?php 
session_start();
 include("../controllers/statistics.php");
var_dump($_SESSION);
?>
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
    <?php include("menu.php") ;?>
    <div class="main-content ">
        <div class="welcomeback-summary grid">
            <div class="welcomeback grid">
               <div class="welcome-text grid">
                    <div class="text">
                        <p>Welcome Back !</p>
                         <p>Dashboard <?php echo $_SESSION['admin']['mail'] ?></p>
                    </div>
                    <div class="admin-img-welcome">
                        <img src="../img/back3.jpeg" alt="welcome">
                    </div>
               </div>
               <div class="summary grid">
                    <div class="summary-text">Overview <br> Patients /category</div>
                    <div class="summary-info grid">
                        <div class="category-number">
                            <span class="number"><?php echo $adult ?></span>
                            <span class="category">Adults</span>
                        </div>
                        <div class="category-number">
                            <span class="number"><?php echo $children ?></span>
                            <span class="category">Children</span>
                        </div>
                        <div class="category-number">
                            <span class="number"><?php echo $old ?></span>
                            <span class="category">Old</span>
                        </div>
                        <div class="category-number">
                            <span class="number"><?php echo $babies ?></span>
                            <span class="category">Babies</span>
                        </div>
                    </div>
            </div>
            
            </div>
        </div>

    </div>

    <script src="../js/menu.js"></script>
</body>
</html>