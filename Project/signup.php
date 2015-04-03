<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_POST['password']==$_POST['retype'])
    {
$a=mysql_query("INSERT INTO `pizza`.`login` (`name`, `password`, `mobile`) VALUES ('".$_POST['name']."', '".$_POST['password']."', '".$_POST['mobile']."');",$con);

?>
<script>
window.location.assign("login.php")        
</script>
<?php
}
else
    ?>
    <script>
        alert("PASSWORD MISMATCH")
        </script>
<?php
        }
?>

<html>
    <head>
        <title>CREATE AN ACCOUNT</title>
        <link rel="stylesheet" type="text/css" href="division.css">
    </head>
    <body bgcolor="yellow">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div id="text2">
            <center>
                <h2> ENTER THE FOLLOWING DETAILS </h2>
        <br>
        <h3>
        USER NAME : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="name" size="30" />
        <br>
        <br>
        PASSWORD : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="password" name="password" size="30" />
        <br>
        <br>
        RETYPE PASSWORD : &nbsp&nbsp&nbsp
        <input type="password" name="retype" size="30" />
        <br>
        <br>
        MOBILE NUMBER : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="mobile" size="30" />
        <br>
        <br>
        <br>
        <input type="submit" value="CREATE ACCOUNT" />
    </h3>
        </center>
        </div>
        </form>
    </body>
</html>


