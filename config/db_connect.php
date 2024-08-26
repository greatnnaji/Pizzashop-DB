<?php 

    //connect to database
    $conn = mysqli_connect('localhost', 'great', 'test1234', 'greats_pizza');//last -- database name

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();//concatenation(.)
    }

?>