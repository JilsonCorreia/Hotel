<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <link rel="stylesheet" href="./css/admin.css">
    <title>The Continental</title>
</head>
<body style="background-color:black" >

        <nav class="navbar">
            <div class="brand-title"><a href="#find" class="cont"><img style='width:250px; height:50px ' src="./images/logo1.PNG" id="logo-sfit" alt="TheContinental"></a></div></div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links navbar-links1">
            
                <ul>
                <li><a href="./index.php"> HOME</a></li>
                <li><a href="./login.php">ADMIN</a></li>
                <li><a href="./details.php">DETAILS</a></li>
                </ul>
            </div>
        </nav>


        <div class= "admin">
            <h1>✧  New Login  ✧</h1>
            
            <form action="registration.php" method="POST">
               <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" autofocus>
                <span id="error1"></span>
               <input type="text" name="email"  id="email" placeholder="Email" autocomplete="off" autofocus >
                <span id="error2"></span>
               <input type="password" name="password"id="password" placeholder="Password">
                <span id="error3"></span>
               <input type="submit" value="Submit" onclick="return validateadmin()">
            </form>
           
        </div>

       
   <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
    </script>

</body>
</html> 
<script>
    
    function validateadmin(){
        var usernamez=document.getElementById("username").value;
       // var emails=document.getElementById("email").value;
        var regex=/^[a-zA-Z]+([w ]{0,})+([a-zA-Z]{0,})$/;
        
        if(usernamez==""){
              document.getElementById("error1").innerHTML="Please Enter Username";
              document.getElementById("error1").style.color="red";
              //alert("fiil out");
              
              return false;
              
        }
        else if(usernamez.length<3 || usernamez.length>18){
            document.getElementById("error1").innerHTML="Length should be between 3 and 18";
            document.getElementById("error1").style.color="red";
            return false;
        }
        else if(regex.test(usernamez)==false){
            document.getElementById("error1").innerHTML="Only characters are allowed";
            document.getElementById("error1").style.color="red";
            return false;
        }
        else if(regex.test(usernamez)==true){
            document.getElementById("error1").innerHTML="";
            
        }
       
       
        var emails=document.getElementById("email").value;
        var regex1=/(^[A-Za-z_\-\.]{3,15})+([0-9]{0,})+\@([A-Za-z_\-\.])+\.([A-Za-z]{2,4})$/;
        if(emails==""){
              document.getElementById("error2").innerHTML="Please Enter Email";
              document.getElementById("error2").style.color="red";
              //alert("fiil out");
              
              return false;
              
        }
        else if(regex1.test(emails)==false){
            document.getElementById("error2").innerHTML="Enter a valid email address";
            document.getElementById("error2").style.color="red";
            return false;
        }
        else if(regex1.test(emails)==true){
            document.getElementById("error2").innerHTML="";
            
        }
        
        
        
        var passwords=document.getElementById("password").value;
        var regex2=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        if(regex2.test(passwords)==false){
            document.getElementById("error3").innerHTML="Password should contain at least 1 uppercase ,1 lowercase, 1 number and special character with min 8 length .";
            document.getElementById("error3").style.color="red";
            return false;
        }
        return true;
    }
</script>