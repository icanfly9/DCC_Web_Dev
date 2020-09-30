<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "admin"){
        echo "<h1><center>Login Successful</center></h1>";
        echo "<h4><center>"."Welcome ".$username."</center></h4>";
    }
    else{
        echo "<h2><center>Login Failed</h2>";
    }
?>