<?php
$con = mysqli_connect("localhost","id15472251_jilsoncorreia","y^}K<A1|O=JE#U/7","id15472251_webhotel") or die(mysql_error());

   
    //reserve.php
    if(isset($_POST['sub']))
    {
      $title =$_POST['title'];
      $fName =$_POST['fName'];
      $lName =$_POST['lName'];
      $contno = $_POST['contno'];
      $nation = $_POST['nation'];
      $roomty = $_POST['roomty'];
      $noroom = $_POST['noroom'];
      $meal = $_POST['meal'];
      $cin = $_POST['cin'];
      $cout = $_POST['cout'];

      $sql = "INSERT INTO `reserve`(`title`,`fName`, `lName`, `contno`, `nation`, `roomty`, `noroom`, `meal`, `cin`, `cout`) VALUES ('$title','$fName','$lName','$contno','$nation','$roomty','$noroom','$meal','$cin','$cout')" ;
      header("Location: reserve.php");

    if(mysqli_query($con,$sql))
      echo".";

    }

 
    //contact.php         
    if(isset($_POST['submit']))
    {
      $name =$_POST['nameq'];
      $feedback = $_POST['feedback'];
      $email = $_POST['emailq'];
      $sql = "INSERT INTO `contact`(`fullname`, `feedback`, `email`) VALUES ('$name','$feedback','$email')" ;
      header("Location: contact.php");

    if(mysqli_query($con,$sql))
      echo".";

    }


?>