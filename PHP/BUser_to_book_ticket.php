<?php
$user = 'root';
$password = '';
$database = 'airline_reservation_system';
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "select *from  flight_info  where Flight_no='$id'";
    $result = $mysqli->query($sql);
    while ($rows = $result->fetch_assoc()) {

        $flightno = $rows['Flight_no'];
        $flightname = $rows['Flight_name'];
        $source = $rows['Source'];
        $destination = $rows['Destination'];
        $airport = $rows['Airport'];
        $date = $rows['Date'];
        $time = $rows['Time'];
        $price = $rows['Price'];
        $seats = $rows['Seat'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Book Ticket</title>
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
        <?php include './BUserHomePage.php'; ?>
        <form class="registerclass" name="myForm" method="POST">
            <center>

                <div>
                    <div class="form-group">
                        <div  class="col-sm-4"></div>
                        <div  class="col-sm-4">
                            <h2 style="text-align: center">Book Ticket</h2>
                        </div>

                        <div class="form-group" style=" display: flex;">
                            <label for="source" class="col-sm-3 control-label">Flight_no:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $flightno; ?>"  name="flightno" required minlength="4" title="Please enter flight no" readonly>
                            </div>

                        </div>

                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Flight Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control"value="<?php echo $flightname; ?>" name="flightname" required minlength="4" title="Please enter flight name" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Source City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $source; ?>" name="source" required title="Please enter source " readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Destination_City:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $destination; ?>" name="destination" required title="Please enter destiny" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Airport Name:</label>
                            <div class="col-sm-8">

                                <input type="text" class="form-control" value="<?php echo $airport; ?>" name="airportname" required minlength="6" title="Please enter airport name" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Date:</label>
                            <div class="col-sm-8">

                                <input type="date" class="form-control" value="<?php echo $date; ?>" name="date" required title="please enter date of flight" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Time:</label>
                            <div class="col-sm-8">

                                <input type="time" class="form-control" value="<?php echo $time; ?>" name="time" required title="Please enter time of flight" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Ticket Price:</label>
                            <div class="col-sm-8">

                                <input type="number" name="price" class="form-control" value="<?php echo $price; ?>" name="ticketprice" name="ticketprice" required minlength="3" title="Please enter price of fligth" readonly>
                            </div>
                        </div>
                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Available Seat</label>
                            <div class="col-sm-8">

                                <input type="number" class="form-control" value="<?php echo $seats; ?>" name="seat" required minlength="1" title="add number of seats" readonly>
                            </div>
                        </div>


                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Number of Seats:</label>
                            <div class="col-sm-8">

                                <select class="form-control" name="seats">
                                    <!--                    (please select:)-->
                                    <option value="1" selected>1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <label for="destiny" class="col-sm-3 control-label">Class:</label>
                            <div class="col-sm-8">

                                <select class="form-control" name="classs">
                                    <!--                    (please select:)-->
                                    <option value="Regular" selected>Regular Class</option>
                                    <option value="first">First Class</option>
                                    <option value="second">Second Class</option>
                                    <option value="economic">Economic Class</option>
                                    <option value="bussines">Business Class</option>
                                </select>
                            </div>
                        </div>

                       
                    </div>
                    <div class="form-group" >
                        <div class="col-sm-offset-3 col-sm-8">
                             <input type='hidden' name='name' value='' readonly="">
                            <button class="btn-success" type="submit" onclick="func()" id="book"   name="book" value="addflight">Book Ticket</button>
                            <!--                            <button class="btn-danger" type="reset"  name="add" value="addflight">Cancel</button>-->
                        </div>
                    </div>

                </div>
            </center>
        </form>
   
<!--         <form name='myForm' action="" method="POST">
            <input type='hidden' name='hdd' value='' readonly="">
            <button type="submit" onclick="func()" name="btn">Submit</button>
        </form>
         // Setup text field -->
<script type="text/javascript"> 
    var name='';
   function func(){
    var name=prompt("enter name");
    document.forms['myForm']['name'].value = name;
   }
  
</script>
    </body>
</html>
<?php

 
if (isset($_POST['book'])) {

    $flightno = $_POST['flightno'];
    $flightname = $_POST['flightname'];
    $source_city = $_POST['source'];
    $destination_city = $_POST['destination'];
    $airline = $_POST['airportname'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price = (float)$_POST['price'];
    $seats = $_POST['seat'];
     $Aseats =(float) $_POST['seat'];
    $Rseat=(float)$_POST['seats'];
    $class=$_POST['classs'];
//    $passport = $_POST['hdd'];
    
//    function prompt($prompt_msg) {
//        echo("<script> var answer = prompt('" . $prompt_msg . "'); </script>");
//
//        $answer = "<script>document.write(answer); </script>";
//        return($answer);
//    }
//
//    //program
//    $prompt_msg = "Please type your Passport ID.";
//    $passp = prompt($prompt_msg);
//   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_reservation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$age=$_POST['name'];

echo $Aseats;
echo 'then';
echo $Rseat;
echo 'and';
echo $Aseats + $Rseat;
echo 'and';

$sql1 = "select * from buser where PassportID='$age'";
$result1=$conn->query($sql1);
if ($result1->num_rows >0) {
  // output data of each row
  if(($Aseats-$Rseat)>0){
         $total = 1.0;
      if ($class=="Regular") {
            $total = $Rseat * $price;
        } else if ($class=="first") {
            //5% above
            $price = $price + ((5 * $price) / 100);
            $total = $Rseat * $price;

        } else if ($class=="second") {
            //10% above
            $price = $price + ((10 * $price) / 100);
            $total = $Rseat * $price;
        } else if ($class=="economic") {
            //15% above
            $price = $price + ((15 * $price) / 100);
            $total = $Rseat * $price;
        } else {
            //20 above
            $price = $price + ((20 * $price) / 100);
            $total = $Rseat * $price;
        }
        echo $total; 
        echo '<center><h2>Booked Succesfully </h2></center>';
  }
 else {
     echo '<center><h2>There is no Available space </h2></center>';
     exit(); 
  }
 
}
else {

//    header("Location: BUserFlight_view_after_login.php");
   
    echo '<center><h2>You Entered Wrong Passport Id </h2></center>';
     exit();
  
}


    $conn->close();
}
?>