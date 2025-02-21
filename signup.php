<?php
if(isset($_post['username']) && isset($_post['password']) ){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
    }
    $username =validate( $_post['username']);
    $password =validate($_post['password']);
    if(empty($username)){
        header("location: signup.php?error=user name is required");
        exit();
    }else if (empty($password)){
        header("location: signup.php?error=password is required");
        exit();
    }else{
        echo "valid input";
    }

}    else{
    header("location: index.php");
    exit();
}

?>



<!DOCTYPE html>
<html xmlns="en">

<head>
	<title>Kemet</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5"> -->
	<link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>

<body>

    <nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="navbar__logo"><i class="fa-solid fa-ankh"></i>KEMET<i class="fa-solid fa-ankh"></i></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
        
            </div>
                
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="home.html" class="navbar__links">
                        Home
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__links">
                        Flights
                    </a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__links">
                      Package
                    </a>
                </li> 
                <li class="navbar__item">
                    <a href="hotels.html" class="navbar__links">
                        Hotels
                   </a>
                </li>
            
            <li class="navbar__item">
                <a href="/" class="navbar__links">
                    Tours
               </a>
            </li>
                <li class="navbar__btn">
                    <a href="/" class="call">
                      
                        <i class="fa-solid fa-phone"></i>
        
                    </a>
                </li>
                <li class="navbar__btn">
                    <a href="login.html" class="LG">
                        Login  
                        
                         <i class="fa-solid fa-right-to-bracket"></i>
                    </a>
                </li>
            </ul>
        </div>
        </nav>
         

   <section>
    <div class="loginbg">
    <div class="signup-box">
        <form action="home.html">
            <h2>Sign Up</h2>
            <?php if(isset($_get['error'])) {?>
            <p class="error"><?php echo $_get['error'] ?></p>
            <?php } ?>
            <div class="input-box">
                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                <input type="username" required>
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="Email" required>
                <label>Email</label>
            </div>
            
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" id="password" required>
                <label id="passcreat">Creat Password</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="checkmark-circle"></ion-icon></ion-icon></span>
                <input type="password" id="confirm_password" required>
                <label id="passcon">Confirm Password</label>
            </div>
            <div class="rememberorno">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit">Sign up</button>
            <div class="registerL">
                <p>Already have an account <a href="login.html"> login</a></p>
            </div>
    
        </form>
    </div>
   </div>
   </section>



   <script src="js/join.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
