<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet"  href="./css/contact.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Continental</title>
</head>
<body style="background-color:black">
<nav class="navbar">
            <div class="brand-title"><a href="index.php" class="cont"><img style='width:250px; height:50px ' src="./images/logo1.PNG" id="logo-sfit" alt="TheContinental"></a></div></div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links navbar-links1">
            
                <ul>
                <li><a href="./index.php"> HOME</a></li>
                <li><a href="./index.php#about">ABOUT US</a></li>
                <li><a href="./index.php#gallery">GALLERY</a></li>
                <li><a href="./index.php#rooms">ROOMS</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="./login.php">ADMIN</a></li>
            </ul>
        </nav>

  
  <div class="contact-section">

    <h1 style="color: rgb(215, 240, 158); ">✧   CONTACT US   ✧</h1>
    <div class="border"></div>
    <div class="left">  
    <form class= "contact-form" action="db.php" method="post">

    <input type="text" class="contact-form-text" name="nameq" id="fname" placeholder="Full Name">
              <span id="error"></span>
    <input type="text" class="contact-form-text" name="emailq" id="email"  placeholder="Email Address">
              <span id="error1"></span>
    <textarea type="text" class="contact-form-text" name="feedback"  id="feedback" placeholder="Your Review"></textarea>
              <span id="error2"></span>
    <input type="submit" name='submit' class="contact-form-btn" onclick="return validate()" style="color:grey" value="Send">

    </form>
    </div>
  </div>

<div class="img">
<img style="opacity: 100%" src="images/contact_us.svg">
</div>
<br ><br><br><br>  

   <script>
        function validate(){
        var names=document.getElementById("fname").value;
        var namez=names.trim();
        var regex=/^[a-zA-Z- ]+([w ]{0,})+[a-zA-Z]+$/;  
        
        if(namez==""){
              document.getElementById("error").innerHTML="Please fill out this field";
              document.getElementById("error").style.color="red";
              //alert("fiil out");
              
              return false;
              
        }
        else if(regex.test(namez)==false){
            document.getElementById("error").innerHTML="Only characters are allowed";
            document.getElementById("error").style.color="red";
            return false;
        }
        else if (regex.test(namez)==true){
            document.getElementById("error").innerHTML="";
            
        }
        var emails=document.getElementById("email").value;
        var regex1=/(^[A-Za-z_\-\.]{3,15})+([0-9]{0,})+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(emails==""){
              document.getElementById("error1").innerHTML="Please fill out this field";
              document.getElementById("error1").style.color="red";
              //alert("fiil out");
              
              return false;
              
        }
        else if(regex1.test(emails)==false){
            document.getElementById("error1").innerHTML="Enter a valid email address";
            document.getElementById("error1").style.color="red";
            return false;
        }
        else if (regex1.test(emails)==true){
            document.getElementById("error1").innerHTML="";
            
        }
       var feedbacks=document.getElementById("feedback").value;
       //var feddbackz=feedbacks.trim();
       if(feedbacks==""){
              document.getElementById("error2").innerHTML="Please enter your feedback";
              document.getElementById("error2").style.color="red";
              //alert("fiil out");
              
              return false;
              
        }
        else {
            document.getElementById("error2").innerHTML="";
            
        }


      }

        const toggleButton = document.getElementsByClassName('toggle-button')[0];
        const navbarLinks = document.getElementsByClassName('navbar-links')[0];

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
       
    </script>
    
</body>
</html>
