<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$a=mysql_query("SELECT * FROM `login` WHERE `name` LIKE '".$_POST['name']."' and `password`   LIKE '".$_POST['password']."'",$con);

if(mysql_num_rows($a)>0)
{
?>
<script>
window.location.assign("order.html")        
</script>
<?php
}
else
    ?>
<script>
        alert("INCORRECT USERNAME OR PASSWORD")
        </script>
    <?php
}
?>


<html> 
    <head>
        <title>ENTER THE DETAILS TO LOGIN</title>
        <link rel="stylesheet" type="text/css" href="division.css">
            </head>
    <body bgcolor="yellow">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="text2">
    <center>
        <br><br>
            <br>
            <h2>LOGIN </h2>
        <br>
        <h3>
        USER NAME : &nbsp
        <input type="text" name="name"  size="30" />
        <br>
        <br>
        PASSWORD : &nbsp
        <input type="password" name="password" size="30" />
        <br>
        <br>
        <br>
        <input type="submit" value="LOGIN" />
    </h3>
    </center>
            </div>
        </form>
       
    </body>
</html>

 
