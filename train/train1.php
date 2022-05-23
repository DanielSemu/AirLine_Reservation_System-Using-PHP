<!DOCTYPE html>
<html>
<head>
  <title>web page</title>
</head>
<body>
  <h1>SELECT DATA</h1>
<?php 

$sn = "localhost";
$un = "root";
$pas = "";
$db="airline_reservation_system";
// Create connection
$conn =new  mysqli($sn, $un, $pas,$db);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully by using pros"."<br>";

$sq="select * from users";
$res=$conn->query($sq);

if($res->num_rows>0){

  while ($row=$res->fetch_assoc()) {
         

    # code...
    echo $row['First_Name'].  "    ".$row['Password'].  "    ".$row['userType']."<br>";
  }
}
else{
  echo "0 results";
}

$conn->close();

 ?>



</body>
</html>