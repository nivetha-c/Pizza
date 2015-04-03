<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
$a=mysql_query("INSERT INTO `pizza`.`details` (`name`, `address`, `landmark`, `pincode`, `mobile`) VALUES ('".$_POST['name']."', '".$_POST['address']."','".$_POST['landmark']."','".$_POST['pincode']."', '".$_POST['mobile']."');",$con);

?>
<script>
window.location.assign("logout.html")        
</script>
<?php

}
?>


<html>
    <head>
        <title>PERSONAL DETAILS</title>
        <link rel="stylesheet" type="text/css" href="division.css">
    </head>
    <body bgcolor="yellow">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <center>
        
            <div id="text2">  
            <h2><br>ENTER THE FOLLOWING DETAILS</h2>
        <br>
        
        <h3>
        &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp NAME : &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="name" size="20" />
        <br>
        <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        ADDRESS : &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <textarea name="address"  >
        </textarea>
        <br>
        <br>
         LANDMARK : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
        <input type="text" name="landmark" size="20"  />
        <br>
        <br>
         PIN CODE : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="pincode" size="20" />
        <br>
        <br>
        MOBILE NUMBER : &nbsp
        <input type="text" name="mobile" size="20"/>
        <br>
        <br>
        <input type="submit" value ="SUBMIT" />
       
        </h3>
          
            </div>
              </center>
      </form>
    </body>
</html>


