
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/general.css">
</head>
<body>
    <div class="login-section grid">
        <div class="left-side flex">
            <div class="logo flex"> 
               <div class="logo-img"><img src="../img/logo.jpeg" alt="Logo"></div>
               <span class="medinfo flex">Med Info</span> 
            </div>
            <div class="text-side ">
                <span class="title-login">Free Online Access to your Medical Informations , Any time Any Where </span> <br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit velit laudantium, dolor, hic iste reprehenderit 
                
            </div>
            
        </div>
        <div class="login flex">
           <form action="../controllers/login.php" method="post">
                <fieldset>
                    <legend>Log in</legend>
                    <div class="mail">
                        <label for="mail">E-mail Address</label> <br>
                        <input type="email" name="mail" id="mail" required>
                    </div>
                    <div class="password">
                        <label for="password">Password</label> <br>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <!-- <div class="remember-info">
                        <div class="remember-box flex">
                            <div class="remeber-check">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="rember">Remember me</label>
                            </div>
                            <a href="">Forgot password ?</a>
                        </div>
                    </div> -->
                    <div class="login-button"><button type="submit">Login</button> </div>
                    <div class="sign-up"><span>Dont have an account ?</span> <a href="">Sign up</a> </div>
                </fieldset>                
           </form>
        </div>
    </div>
</body>
</html>