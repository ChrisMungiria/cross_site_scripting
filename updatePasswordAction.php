<?php 

    include("connection.php");
    session_start();
    $username = $_POST['username'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];


    $sql = "UPDATE users SET password='$newpassword' WHERE username='$username' AND password='$oldpassword'";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Password updated successfully');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>