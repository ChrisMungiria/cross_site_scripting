<?php
   include("connection.php");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "User created successfully";
        echo "<script>window.location.href='login.php';</script>";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
?>