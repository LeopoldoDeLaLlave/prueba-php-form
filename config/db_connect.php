<?php

//Connect to database

$conn = mysqli_connect('localhost', 'root', '', 'ninja_pizza');


//CHEck the connection
if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}

?>