<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>XXS</title>
</head>
<body class="w-screen h-screen flex items-center justify-center">
    <div class='w-10/12 max-w-xs h-40 border p-5'>
        <h1>User Details</h1>
        <?php 

            session_start();

            if($_SESSION['loggedin'] == true){
                echo "<p>Username: " . $_SESSION['username'] . "</p>";
                echo "<p>Firstname: " . $_SESSION['firstname'] . "</p>";
                echo "<p>Lastname: " . $_SESSION['lastname'] . "</p>";
            }else{
                echo "error";
            }
        ?>
    </div>
</body>
</html>