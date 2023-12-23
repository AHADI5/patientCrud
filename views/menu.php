<?php session_start() ?>
<div class="head-bar flex">
        <div class="logo-text flex">
            <div class="logo flex">
                <div class="menu-button flex">
                    <i class="bi bi-menu-button-wide"></i>
                    
                </div>
                <div class="menu hidden-menu flex">
                    <ul >
                        <li class="invisible">
                            <i class="bi bi-house-door"></i> 
                            <a href="./admin_home.php">Home</a>
                            <hr>
                        </li>
                        
                        <li class="invisible">
                            <i class="bi bi-person-plus"></i> 
                            <a href="./addPatient.php">Add patients</a>
                            <hr>
                        </li>
                        
                        <li class="invisible">
                            <i class="bi bi-view-list"></i> 
                            <a href="./list_patient.php">List</a>
                            <hr>
                        </li >
                       
                    </ul>
                </div>
                <div class="logo-medinfo flex">
                    <div class="logo-img"><img src="../img/logo.jpeg" alt="Logo"></div>
                    <span class="medinfo flex">Med Info</span> 
                </div>
               
            </div>
        </div>
        <div class="system-title flex">
            <h3>Medical Information Recording</h3>
        </div>
        <div class="picture-name flex">
            <div class="profile-picture flex"><i class="bi bi-person-circle"></i></div>
            <div class="name-role-icon flex">
                <div class="name-role">
                    <div class="name">Admin</div>
                    <div class="role"><?php echo $_SESSION['admin']['mail'] ?></div>
                </div>
                <div class="icon flex"><i class="fa fas fa-angle-down"></i></div>
            </div>
        </div>
    </div>