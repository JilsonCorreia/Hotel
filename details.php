<?php 
//details.php
$connect = mysqli_connect("localhost","id15472251_jilsoncorreia","y^}K<A1|O=JE#U/7","id15472251_webhotel");
$query = "SELECT * FROM reserve ORDER BY fName ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/detail.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
   
    <title>The Continental </title>
<style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
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
                <li><a href="./login.php">ADMIN</a></li>
                <li><a href="./admin.php">New Admin</a></li>
            </ul>
        </nav>

        <h1 style="color: rgb(215, 240, 158); text-align: center;">✧   THE CONTINENTAL REGISTRATIONS   ✧</h1>
        <br><br>
        
            <img class="usepic" style="opacity: 90%; " src="images/user_profile.svg">
            <img class="usepic" style="opacity: 90%; " src="images/user_hire.svg">
        
            <br><br><br>
        <h1 style="color: rgb(215, 240, 158); text-align: center;">Room Bookings Entries</h1>

        <div class="row">
    <div class="right">
     <select style="background-color:white; border-radius:8px; height:35px; width:400px;" name="customer_list" id="customer_list" class="form-control">
      <option value="">Select customer</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["id"].'">'.$row["fName"].'</option>';
      }
      ?>
     </select>
    </div>
    <style>
    .button {
        transition-duration: 0.4s;
        border:0px;
        height:35px;
        width:100px;
        background-color: #1e2c3b; 
        border-radius:8px;
    }

    .button:hover {
        background-color: black;
        color: white;
    }
    </style>
    <div class="left">
     <button type="button" name="search" id="search" class="button">Search</button>
    </div>
   </div>
   <br />
   <div class="table-responsive" id="customer_details" style="display:none">
   <table>
                    <tr>
                            <td width="10%" align="right"><b>Title</b></td>
                            <td width="90%"><span id="customer_title"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>First Name</b></td>
                            <td width="90%"><span id="customer_fName"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Last Name</b></td>
                            <td width="90%"><span id="customer_lName"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Contact Number</b></td>
                            <td width="90%"><span id="customer_contno"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Nationality</b></td>
                            <td width="90%"><span id="customer_nation"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Room Type</b></td>
                            <td width="90%"><span id="customer_roomty"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Number of Rooms</b></td>
                            <td width="90%"><span id="customer_noroom"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Meal Plans</b></td>
                            <td width="90%"><span id="customer_meal"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Check In Date </b></td>
                            <td width="90%"><span id="customer_cin"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>Check Out Date</b></td>
                            <td width="90%"><span id="customer_cout"></span></td>
                        </tr>
                    </table>
   </div>
   
  </div>
  <br><br><br>
  <h1 style="color: rgb(215, 240, 158); text-align: center;">Customer Reviews</h1>
  <style>
table {
    border-collapse: collapse;
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    color: white;
    
    
  }
  
  th, td {
    text-align: left;
    padding: 18px;
    height: 10px;
    text-align:center;
  }
  
  tr:nth-child(even) {background-color: #1e2c3b;}
</style>

<table>
    <tr>
    <th>Name</th>
    <th>E_mail</th>
    <th>Review</th>
    </tr>
    <?php

        $conn = mysqli_connect("localhost","id15472251_jilsoncorreia","y^}K<A1|O=JE#U/7","id15472251_webhotel");
        if($conn-> connect_error){
            die("Connection failed:". $conn-> connect_error);
        }
        $sql = "SELECT fullname,email, feedback FROM contact";
        $result = $conn-> query($sql);

        if ($result-> num_rows >0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["fullname"]."</td><td>".$row["email"]."</td><td>".$row["feedback"]."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        $conn-> close();

    ?>
</table>
</body>
</html>
<script>
     const toggleButton = document.getElementsByClassName('toggle-button')[0];
        const navbarLinks = document.getElementsByClassName('navbar-links')[0];

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
</script>

<script>    
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#customer_list').val();
  if(id != '')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
                {
                    $('#customer_details').css("display","block");
                    $('#customer_title').text(data.title);
                    $('#customer_fName').text(data.fName);
                    $('#customer_lName').text(data.lName);
                    $('#customer_contno').text(data.contno);
                    $('#customer_nation').text(data.nation);
                    $('#customer_roomty').text(data.roomty);
                    $('#customer_noroom').text(data.noroom);
                    $('#customer_meal').text(data.meal);
                    $('#customer_cin').text(data.cin);
                    $('#customer_cout').text(data.cout);
                   
                }
   })
  }
  else
  {
   alert("Please Select customer");
   $('#customer_details').css("display", "none");
  }
 });
});
</script>