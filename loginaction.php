<?php 

    include("connection.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['loggedin'] = false;

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $_SESSION['loggedin'] = true;
        $row = mysqli_fetch_assoc($result);
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['username'] = $row['username'];

        echo "<script>window.location.href='detailspage.php';</script>";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>