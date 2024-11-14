<?php 

    //connect to the database 
    $conn = mysqli_connect('localhost', 'tom', 'test1234', 'pizza_byte');


    //this is checking the connection
    if(!$conn){
        echo "An Annoying Connection error occurred when connecting to the pizza database: " . mysqli_connect_error();
    }


?>