
<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","airline_reservation_system");
//start connection
$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connect){
  die("Database connection Error".mysql_error());
  }
 ?>