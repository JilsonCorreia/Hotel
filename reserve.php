<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css"> 
   
    <title>The Continental</title>
    
</head>
<body>
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
                <li><a href="./contact.php">CONTACT US</a></li>
                <li><a href="./login.php">ADMIN</a></li>
            </ul>
        </nav>
        
       <h1 style="color: rgb(215, 240, 158); text-align: center;">✧   RESERVATION   ✧</h1>
      
       <form style="opacity:75%; font-size: 20px" action="db.php" method="POST" >
       <div class="right" >       

       <h2 style="color: burlywood; font-size: 27px">PERSONAL- DETAILS</h2>        
            <span style="text-align: left;color: blanchedalmond;">Title*</span>
                                            <select style="margin-left:52px;height:20px;width:80px"   name="title" class="form-control" required >
												<option value selected >Select</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                            </select><br><br>                                            
            <span style="text-align: left;color:blanchedalmond;">First Name*</span>
            <input type="text" name="fName"  id="name1" style="height:20px;" placeholder="Name " min="3" max="10"><span id="error"  style="font-size:20px"></span><br><br>
            <span style="text-align: left;color:blanchedalmond;">Last Name*</span>
            <input type="text" name="lName"id="surname1" required style="height:20px;" placeholder="LastName " min="3" max="10"><span id="error1" style="font-size:20px"></span><br><br>
            <span style="text-align: left;color:blanchedalmond;">Contact*</span>
            <input style="height:20px;font-size:15px" type="text" id="mobno1"name="contno"placeholder="MobileNo " required><span id="error2" ></span><br><br>
                <label style="color: blanchedalmond;">Nationality*</label><br>
                       <label  style="color: blanchedalmond;" class="radio-inline">
                             <input style="margin-left:35px" type="radio" name="nation"  value="Citizen" checked="">Citizen <br> 
                            <input style="margin-left:35px" type="radio" name="nation"  value="Non Citizen ">Non Citizen 
                         </label>                         
       </div>

       <div class="left">

       <h2 style="color: burlywood;text-align: left; font-size:25px">ROOM- DETAILS</h2>
        <span style="text-align: left;color: blanchedalmond;">Room Type*</span>
       <select style="margin-left:20px;height:23px" name="roomty" class="form-control" id="room" >
          <option value selected >Select</option>
          <option value="PRESIDENTIAL">PRESIDENTIAL</option>
          <option value="PENTHOUSE">PENTHOUSE</option>
          <option value="DELUXE">DELUXE</option>
          <option value="LUXURY">LUXURY</option>
      </select>
      <br><span id="error3"></span><br>
      <span style="color: blanchedalmond;">NO of Rooms*</span>
      <select name="noroom" class="form-control"style="height:23px" id="noroom" >
         <option value selected >Select</option>
         <option value="1">1</option>
         <option value="2">2</option>
     </select><br><span id="error4"></span><br>
     <label style="color: blanchedalmond;">Meal Plan</label>
     <select style="margin-left:37px;height:23px" name="meal" class="form-control" id="roomdet">
         <option value selected >Select</option>
         <option value="Room only">Room only</option>
         <option value="Breakfast">Breakfast</option>
         <option value="Half Board">Half Board</option>
         <option value="Full Board">Full Board</option></select>
         <br><span id="error5"></span>
         <br>


         <label style="color: blanchedalmond;">Check-In</label>
                <input style="margin-left:43px" name="cin" type ="date" class="form-control" id="checkin"><br>
                        <span id="error6"></span>  <br>                 
        <label style="color: blanchedalmond;">Check-Out</label>
        <input style="margin-left:28px" name="cout" type ="date" class="form-control" id="checkout"><br><span id="error7"></span> 
        <br><br>
        <div  class="button butali1" style=" padding-bottom: 10px">
       <button style="border-width: 0px; color: blanchedalmond; font-size:25px;background-color: rgb(0,0,0);" name='sub'  type="submit" value="SUBMIT" onclick="return reservation()">SUBMIT</button></h3>
        
    </div>
    </form>
     <br><br>
    
    </div>
    
    <script>
     const toggleButton = document.getElementsByClassName('toggle-button')[0];
        const navbarLinks = document.getElementsByClassName('navbar-links')[0];

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
</script>


       <script>
        function reservation(){
              var names1=document.getElementById("name1").value;
              var namez1=names1.trim();
              var regex=/^[a-zA-Z]+$/;
        
              if(namez1==""){
                  document.getElementById("error").innerHTML="Please fill out this field";
                  document.getElementById("error").style.color="red";
                  //alert("fill out");
                  
                  return false;
                  
            }
            else if(regex.test(namez1)==false){
                document.getElementById("error").innerHTML="Only characters are allowed";
                document.getElementById("error").style.color="red";
                return false;
            }
            else if (regex.test(namez1)==true){
                document.getElementById("error").innerHTML="";
                
            }
            var surnames1=document.getElementById("surname1").value;
            var surnamez1=surnames1.trim();
            var regex2=/^[a-zA-Z]+$/;
            if(surnamez1==""){
                  document.getElementById("error1").innerHTML="Please fill out this field";
                  document.getElementById("error1").style.color="red";
                  //alert("fiil out");
                  
                  return false;
                  
            }
            else if(regex2.test(surnamez1)==false){
                document.getElementById("error1").innerHTML="Only characters are allowed";
                document.getElementById("error1").style.color="red";
                return false;
            }
            else if (regex2.test(surnamez1)==true){
                document.getElementById("error1").innerHTML="";
                
            }
            var mobileno1=document.getElementById("mobno1").value;
            var regex1=/^[7-9]{1}[0-9]{9}$/;
            if(mobileno1==""){
                  document.getElementById("error2").innerHTML="Please fill out this field";
                  document.getElementById("error2").style.color="red";
                  //alert("fiil out");
                  
                  return false;
                  
            }
            else if(regex1.test(mobileno1)==false){
                document.getElementById("error2").innerHTML="Enter a valid Mobile No";
                document.getElementById("error2").style.color="red";
                return false;
            }
            else if (regex1.test(mobileno1)==true){
                document.getElementById("error2").innerHTML="";
                
            } 
            var rooms=document.getElementById("room").value;
            if(rooms==""){
                document.getElementById("error3").innerHTML="Please Enter a room";
                document.getElementById("error3").style.color="red";
                return false;
            }
            else{
                document.getElementById("error3").innerHTML="";
            }
            var norooms=document.getElementById("noroom").value;
            if( norooms==""){
                document.getElementById("error4").innerHTML="Please enter No of  room(s)";
                document.getElementById("error4").style.color="red";
                return false;
            }
            else{
                document.getElementById("error4").innerHTML="";
            }
            var roomsdets=document.getElementById("roomdet").value;
            if(roomsdets==""){
                document.getElementById("error5").innerHTML="Please enter a Meal plan";
                document.getElementById("error5").style.color="red";
                return false;
            }
            else{
                document.getElementById("error5").innerHTML="";
            }
            var checkins=document.getElementById("checkin").value;
            if(checkins==""){
                document.getElementById("error6").innerHTML="Please select your Check In Date";
                document.getElementById("error6").style.color="red";
                return false;
            }
            else{
                document.getElementById("error6").innerHTML="";
            }
            var checkouts=document.getElementById("checkout").value;
            if(checkouts==""){
                document.getElementById("error7").innerHTML="Please select your Check Out Date";
                document.getElementById("error7").style.color="red";
                return false;
            }
            else{
                document.getElementById("error7").innerHTML="";
            }
    
          }
          
    </script>


</body>
</html>