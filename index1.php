<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
 <?php
$name= "Hello admin";
if ($name == "Hello Admin" ){
    ?>
    <div class="p"><b>Hello Admin</b></div>

    <div class="auth"><b>Authorization match.</b></div>
    <?php
     for($i=0;$i<1;$i++){
            ?>
            <div class="a"><h5>1.Access Granted as an ADMIN.</h5>
            <h4>2.Access Granted as an ADMIN.</h4>
            <h3>3.Access Granted as an ADMIN.</h3>
            <h2>4.Access Granted as an ADMIN.</h2>
            <h1>5.Access Granted as an ADMIN.</h1>
        </div>
  <?php

     }
}
elseif ($name== "Hello subscriber"){
     ?>
     <div class="sub"><b>Hello Subscriber</b></div>
     <div class="auth"><b>Authorization match</b></div>
     <?php
          for($i=0;$i<1;$i++){
            
                ?>
                <div class="a"><h5>1.Access Granted as an SUBSCRIBER.</h5>
                <h4>2.Access Granted as an SUBSCRIBER.</h4>
                <h3>3.Access Granted as an SUBSCRIBER.</h3>
                <h2>4.Access Granted as an SUBSCRIBER.</h2>
                <h1>5.Access Granted as an SUBSCRIBER.</h1>
            </div>
      <?php
            }
  
 }elseif($name == "Hello admin"){
     ?>
    <div class="admin"><b>Hello admin</b></div>
     <div class="auth"><b>Authorization did not match.</b></div>
     <?php
     for($i=0;$i<1;$i++){
            ?>
            <div class="a"><h5>1.Enter your credintials again.</h5>
            <h4>2.Enter your credintials again.</h4>
            <h3>3.Enter your credintials again.</h3>
            <h2>4.Enter your credintials again.</h2>
            <h1>5.Enter your credintials again.</h1>
        </div>
  <?php
    }
 }else{
     ?>
     <div class="d">Fail!</div>
     <?php
 }
 ?>
</body>
</html>