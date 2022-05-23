
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
        <form action="../OperatePHP/LoginChacker.php" method="POST">
            <div class="inputBox" >
                <input type="text" name="username" required="">
                <label id="lb" >Username</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="password" required="">
                <label id="lb1">Password</label>
            </div>
            <input type="submit" name="" value="Login">
            <input type="reset" name="" value="Cancel">
        </form>
    </div>

  

    <script src="/js/bootstrap.js"></script>
</body>
</html>


