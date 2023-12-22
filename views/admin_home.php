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
                         <p>Dashboard</p>
                    </div>
                    <div class="admin-img-welcome">
                        <img src="../img/back3.jpeg" alt="welcome">
                    </div>
               </div>
               <div class="summary grid">
                    <div class="summary-text">Overview <br> Patients /category</div>
                    <div class="summary-info grid">
                        <div class="category-number">
                            <span class="number">50</span>
                            <span class="category">Adults</span>
                        </div>
                        <div class="category-number">
                            <span class="number">50</span>
                            <span class="category">Children</span>
                        </div>
                        <div class="category-number">
                            <span class="number">50</span>
                            <span class="category">Old</span>
                        </div>
                        <div class="category-number">
                            <span class="number">50</span>
                            <span class="category">Babies</span>
                        </div>
                    </div>
            </div>
            
            </div>
        </div>

        <div class="latest-patients">
            <div class="latest-list">
                <table class="patients">
                    <thead >
                        
                        <tr>
                            <td>N°</td>
                            <td>Name</td>
                            <td>Register Number</td>
                            <td>Email</td>
                            <td>Date</td>
                            <td>Genre</td>
                            <td>Details</td>   
                        </tr>
                        
                    </thead>
                   <tbody>
                        <tr>
                            <td>1</td>
                            <td>Gloire Ahadi</td>
                            <td>001</td>
                            <td>elie@gmail.com</td> 
                            <td>20/04/2023</td>
                            <td>Adulte</td>
                            <td><button>view Details</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td> Docile Wakomya</td>
                            <td>001</td>
                            <td>elie@gmail.com</td> 
                            <td>20/04/2023</td>
                            <td>Adulte</td>
                            <td><button>view Details</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> Eliot Ander</td>
                            <td>001</td>
                            <td>elie@gmail.com</td> 
                            <td>20/04/2023</td>
                            <td>Adulte</td>
                            <td><button>view Details</button></td>
                        </tr>
                   
                   </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../js/menu.js"></script>
</body>
</html>