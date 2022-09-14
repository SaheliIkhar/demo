<?php

 $con = mysqli_connect("localhost","root","","mydb");

 if(!$con){
    echo "Failed to connect";
 }
 else{
    echo"You have successfully connect your database";
 }
?>

<!doctype html>
<html>
    <head>
        <title>connect your database</title>
    </head>
    <body>

    </body>
</html>


