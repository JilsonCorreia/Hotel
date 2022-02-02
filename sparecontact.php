<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet"  href="./css/styles.css"> 
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

      <section class='contact'>
      <div class='content'>
      <h1 style="color: rgb(215, 240, 158); ">✧   CONTACT US   ✧</h1>
         </div>
         
      <div class='container-4'>
      
        <div class='contactInfo'>
          <div class='box'>
              <div class='icon'><i class="fa fa-map-marker" ></i></div>
              <div class="text">
                <h3>Address</h3>
                <p>1 Wall Street, New York,<br>NY 10005, United States</p>
              </div>
          </div>
          <div class='box'>
              <div class='icon'><i class="fa fa-phone fa-2x" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Phone</h3>
                <p>+1 212 5738 345</p>
              </div>
          </div>
          <div class='box'>
            <div class='icon'><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Email</h3>
                <p>thecontinental@info.in</p> 
              </div>
          </div>
        </div>
        
        <div class="contactForm" style="background-color:white">
          <form action="db.php" method="POST" >
            <h2>Send Message</h2>
            <div class='inputBox'>
              <span >Full Name</span><br>
              <input type="text" name='nameq' id="fname" min="3" maxlength="15" >
             
              <br>
              <span id="error"></span>
            </div>
            <div class='inputBox'>
                <span>Email</span><br>
              <input type="text" name='emailq' id="email" >
              <br>
              <span id="error1"></span>
            </div>
            <div class='inputBox'>
              
              <span > Feedback</span><br>
              <textarea style='background-color:white;color:black' name="feedback" id="feedback" cols="30" rows="10"  ></textarea>
              <br>
              <span id="error2"></span>
            </div>
            <div class='inputBox'>
              <button style='background-color: #724141; height: 30px;color: white; font-size: 20px' onclick="return validate()" type="submit" name='submit'>Submit</button>
              
            </div>
          </form>

         
        </div>

      </div>
    </section>

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
