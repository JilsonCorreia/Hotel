<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost","id15472251_jilsoncorreia","y^}K<A1|O=JE#U/7","id15472251_webhotel");
 $query = "SELECT * FROM reserve WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
    $data["title"] = $row["title"];
    $data["fName"] = $row["fName"];
    $data["lName"] = $row["lName"];
    $data["contno"] = $row["contno"];
    $data["nation"] = $row["nation"];
    $data["roomty"] = $row["roomty"];
    $data["noroom"] = $row["noroom"];
    $data["meal"] = $row["meal"];
    $data["cin"] = $row["cin"];
    $data["cout"] = $row["cout"];

}

 echo json_encode($data);
}
?>