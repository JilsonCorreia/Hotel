<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style='background:#070707'>
<style>
    
@media (max-width: 847px) {
     
     .navbar {
         flex-direction: column;
         align-items: flex-start;
     }
 
     .toggle-button {
         display: flex;
     }
 
     .navbar-links {
         display: none;
         width: 100%;
     }
 
     .navbar-links ul {
         width: 100%;
         flex-direction: column;
     }
 
     .navbar-links ul li {
         text-align: center;
     }
 
     .navbar-links ul li a {
         padding: .5rem 1rem;
     }
 
     .navbar-links.active {
         display: flex;
     }
     .brand-title{
 
         margin-left: 0%;
     }
     
     
 }
</style>
        <nav class="navbar">
            <div class="brand-title"><a href="index.php" class="cont"><img style='width:250px; height:50px ' src="./images/logo1.PNG" id="logo-sfit" alt="TheContinental"></a></div></div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links">
                <ul>
                <li><a href="./index.php"> HOME</a></li>
                <li><a href="./index.php#about">ABOUT US</a></li>
                <li><a href="./index.php#gallery">GALLERY</a></li>
                <li><a href="./index.php#rooms">ROOMS</a></li>
                <li><a href="./contact.php">CONTACT US</a></li>
                <li><a href="#">ADMIN</a></li>
            </ul>
            </div>
        </nav>
	<div class="container">
		<div class="img">
        
        <img style="opacity: 90%" src="images/access.svg">
		</div>
		<div class="login-content">

        
			<form action="admin_check.php" method='POST'>
				<img src="images/user.svg">
				<h3 class="title" style='color:#F7DC5F; font-size: 30px'>✧   ADMIN   ✧</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
                        
           		   		<h5 style='color:white'>Username</h5>
           		   		<input type="text" name="username" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5 style='color:white'>Password</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<button type="submit" class="btn" name='login' style='text-color: black'>Login</button>
            </form>


        </div>
    </div>
    <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
    </script>
    <script type="text/javascript" src="js/main.js"></script>
 
</body>
</html>
