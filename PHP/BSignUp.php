<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../CSS_Local/registeruser.css">
    
  
</head>
<body>
<?php include 'Bnavbar.php';?>

    <div class="box">
        <h2>Register User</h2>
        <form action="../OperatePHP/SignUp_er.php" name="myform" onsubmit="return(valid())" method="POST" >
            <div class="inputBox" >
                <input type="text" name="name" required="">
                <label id="lb" >Full Name</label>
            </div>
            <div class="inputBox" >
                <input type="email" name="email" required="">
                <label id="lb1" >Email Address</label>
            </div>
            <div class="inputBox" >
                <input type="text" maxlength="10" name="pasport" required="">
                <label id="lb2" >Passport Id</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="password" required="">
                <label id="lb3" >Password</label>
            </div>
            
            <div class="inputBox" >
                <input type="password" name="cpassword" required="">
                <label id="lb4">Confirm Password</label>
            </div>
            <input type="submit"  value="Register">
            <input type="reset" name="" value="Cancel">
        </form>
    </div>
    <script src="../JavaScript/validateregistration.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
