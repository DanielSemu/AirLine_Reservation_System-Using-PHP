<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
    <link rel="stylesheet" href="../css//bootstrap.css">
    <link rel="stylesheet" href="../CSS_Local/navbar.css">
   <style>
    
            body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url('../images/airline1.jpg') ;
    background-size: cover;
}    
        
    </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md  bg-dark navbar-dark">
        <div class="container">
            <a href="BUserHomePage.php" class="navbar-brand " >Airline Reservation</a>
           <buttun class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
               <span class="navbar-toggler-icon"></span>
           </buttun>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="BUserFlight_view_after_login.php" class="nav-link">Flight Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-us" class="nav-link">Hi, User</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a style="float:right" href="BHomePage.php" class="nav-link">Logout</a>
                    </li>
                    
                </ul>
            </div>

        </div>
    </nav>
        <script src="../js/bootstrap.js"></script>
    </body>
</html>


