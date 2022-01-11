<?php
    // include "./pages/db/connection.php";-for connecting database
    //or
    // $connection = mysqli_connect($server, $username, $password, $db);
    //or
    

    $connection = mysqli_connect("localhost", "root", "", "demo");

    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select =
    "insert into register_form (name, email, password) values('$name', '$email', '$password')";

    $result = mysqli_query($connection, $select);

    if($result){
        echo "Successfully inserted";
    } else
        echo "Not inserted successfully";
    
    mysqli_close($connection);
?>