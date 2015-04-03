<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   
$a=mysql_query("INSERT INTO `pizza`.`payment` (`card`, `name`, `bank`, `cvv`, `expiry`) VALUES ('".$_POST['card']."', '".$_POST['name']."','".$_POST['bank']."','".$_POST['cvv']."', '".$_POST['expiry']."');",$con);

?>
<script>
window.location.assign("logoutt.html")        
</script>
<?php

}
?>


<html>
    <head>
        <title>ONLINE PAYMENT</title>
        <link rel="stylesheet" type="text/css" href="division.css">
        
    </head>
    <body bgcolor="yellow">
        
            
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
               <div id="text2">
                   <center>  <br>
                       <br>
                   <h2>ENTER THE FOLLOWING DETAILS </h2>
        <br>
        <h3>
        CARD NUMBER : &nbsp
        <input type="text" name="card" size="30" />
        <br>
        <br>
        NAME OF THE CARD HOLDER : &nbsp
        <input type="text" name="name" width="30" height="40" />
        <br>
        <br>
         NAME OF THE BANK : &nbsp
        <input type="text" name="bank" width="30" height="40" />
        <br>
        <br>
         CVV NUMBER : &nbsp
        <input type="password" name="cvv" width="30" height="40" />
        <br>
        <br>
        EXPIRY DATE : &nbsp
        <input type="text" name="expiry" value="yyyy-mm-dd" size="30" />
        <br>
        <br>
        <input type="submit" value ="SUBMIT" />
       
        </h3></center>
              </div>
        </form>
              
        
    </body>
</html>
