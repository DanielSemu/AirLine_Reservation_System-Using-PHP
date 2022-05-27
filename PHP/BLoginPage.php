
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../CSS_Local/Login.css">
  
</head>

<body>
<?php include 'Bnavbar.php';?>
    <div class="box">
        <h2>Login</h2>
        <form action='' method="POST">
            <div class="inputBox" >
                <input type="text" name="username" required="">
                <label id="lb" >Username</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="password" required="">
                <label id="lb1">Password</label>
            </div>
            <input type="submit" name="login" value="Login">
            <input type="reset" name="" value="Cancel">
        </form>
    </div>

  

    <script src="/js/bootstrap.js"></script>
</body>
</html>

<?php

if(isset($_POST['login'])){
$sn = "localhost";
$un = "root";
$pas = "";
$db="airline_reservation_system";
$emaila_ddress =$_POST["username"];
$password= $_POST["password"];
// Create connection
$conn =new  mysqli($sn, $un, $pas,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($emaila_ddress=='admin@gmial.com' && $password=='123123' ){
     header("Location:BAdminhomepage.php",TRUE,301);
     
}
 else {
$sql1="select *from  buser where Email='$emaila_ddress' and Password='$password'";
$result1=$conn->query($sql1);
if ($result1->num_rows >0){
    header("Location:BUserHomePage.php",TRUE,301);
     exit();
}
 else {
     
    echo ("<script>alert('Username or Password is incorrect');</script>");
}
}

}



///////////////////////////////


?>


