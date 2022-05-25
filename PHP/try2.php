<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        <form name='myForm' action="" method="POST">
            <input type='hidden' name='name' value='' readonly="">
            <button type="submit" onclick="func()" name="btn">Submit</button>
        </form>
      
<script type="text/javascript"> 
    var name='';
   function func(){
     var name=prompt("enter name");
    document.forms['myForm']['name'].value = name;
   }
   document.forms['myForm']['name'].value = name;
</script>
    </body>
</html>
<?php
if (isset($_POST["btn"])){
    
$age=$_POST['name'];
echo $age."conc";
}
?>