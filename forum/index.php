<!-- This is the Home Page for the Forum -->

<?php

    session_start();
    require('connect.php');
    require('forum_functions.php');

    if (@$_SESSION["username"]):
?>

    <!--echo "Welcome " . $_SESSION['username'] . " !!<br/>";-->

<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CODEX - Forum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
        
    </head>

    <body>
    
        <?php include("header.php"); ?><br/><br/>
        <div align = 'left' style = "padding :20px"><a href = "posts.php"><button>Post a Thread</button></a></div>
    
    </body>

</html>
    
    
 <?php   
         
    else :
        echo "Please <a href = 'login.php'>Login</a> to continue";
    endif;

    if (@$_GET['action'] == "logout")
        log_out();
      
    

?>