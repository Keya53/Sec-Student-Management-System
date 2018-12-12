
<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SEC Campus</title>

        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css"> 
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container">
            <form action="login_processing.php" class="form-group" method="post">
                <img src="img/Bangladesh-Government-Logo.png">
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required=""><br>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required=""><br>
                <button type="submit"class=" btn btn-block btn-login form-control" >Login</button>
            </form>
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
