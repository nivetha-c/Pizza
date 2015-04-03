<?php

 $e=0;
      if(!empty($_POST['sn1']))
      {
      $e +=$_POST['sn1']*160;
      }
      if(!empty($_POST['rn1']))
      {
      $e +=$_POST['rn1']*210;
      }
      if(!empty($_POST['ln1']))
      {
      $e +=$_POST['ln1']*290;
      }
      if(!empty($_POST['sn2']))
      {
      $e +=$_POST['sn2']*150;
      }
      if(!empty($_POST['rn2']))
      {
      $e +=$_POST['rn2']*220;
      }
      if(!empty($_POST['ln2']))
      {
      $e +=$_POST['ln2']*300;
      }
      if(!empty($_POST['sn3']))
      {
      $e +=$_POST['sn3']*140;
      }
      if(!empty($_POST['rn3']))
      {
      $e +=$_POST['rn3']*200;
      }
      if(!empty($_POST['ln3']))
      {
      $e +=$_POST['ln3']*290;
      }
      if(!empty($_POST['sn4']))
      {
      $e +=$_POST['sn4']*170;
      }
      if(!empty($_POST['rn4']))
      {
      $e +=$_POST['rn4']*260;
      }
      if(!empty($_POST['ln4']))
      {
      $e +=$_POST['ln4']*330;
      }
      if(!empty($_POST['sn5']))
      {
      $e +=$_POST['sn5']*145;
      }
      if(!empty($_POST['rn5']))
      {
      $e +=$_POST['rn5']*220;
      }
      if(!empty($_POST['ln5']))
      {
      $e +=$_POST['ln5']*290;
      }
      if(!empty($_POST['sn6']))
      {
      $e +=$_POST['sn6']*150;
      }
      if(!empty($_POST['rn6']))
      {
      $e +=$_POST['rn6']*250;
      }
      if(!empty($_POST['ln6']))
      {
      $e +=$_POST['ln6']*350;
      }
?>

<html>
    <head>
        <title>BILL</title>
        <link rel="stylesheet" type="text/css" href="division.css">
    </head>
    <body bgcolor="yellow">
    <center>
        
            <div id="text2">
                <h2>
                    YOUR BILL IS GENERATED BELOW</h2>
            <br><br>
            <h3>
            NETT. AMOUNT : &nbsp 
            <input type="text" value=" <?php echo $e ?> " size="12" /> </h3>
            <br>
            <br>
            <h2> SELECT THE MODE OF PAYMENT </h2>
             <a href="details.php"> <h2 style="font-size: 300%" > <input type="submit" value="CASH ON DELIVERY" /> </a>
             <a href="payment.php" > <h1 style="font-size: 100%" > <input type="submit" value="PAY ONLINE" /> </a>
        
                           

    </center>
</div>
    </body>
</html>



