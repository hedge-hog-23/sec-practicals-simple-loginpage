<?php 
    include_once("connection.php");
    include("login1.php")
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link rel="stylesheet" type="text/css" href="login.css"-->
    </head>
    <body>
    
        
        <center><div id="form">
            <h1 align = "center">LOGIN</h1>
            <br><br><br><br><br><br><br>
            <div class = "layout">
            <form name="form" action="login1.php" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user" required><hr><br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass" required><hr><br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
               
            </form>
            </div>
        </div><center>
      
    </body>
</html>