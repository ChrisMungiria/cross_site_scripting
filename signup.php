<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>XXS</title>
</head>
<body class="w-screen h-screen flex items-center justify-center">
    <form action="signupaction.php" method="post" class='flex flex-col gap-4'>
        <h1 class="text-2xl text-center">Sign up</h1>
        <input type="text" placeholder="Firstname" name="firstname" class='border p-2 focus:outline-none'>
        <input type="text" placeholder="Lastname" name="lastname" class='border p-2 focus:outline-none'>
        <input type="text" placeholder="Username" name="username" class='border p-2 focus:outline-none'>
        <input type="password" placeholder="Password" name="password" class='border p-2 focus:outline-none'>
        <input type="submit" value="Sign up" class="bg-blue-500 text-white rounded-md flex w-fit mx-auto px-4 py-2">
    </form>
</body>
</html>