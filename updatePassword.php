<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>XXS</title>
</head>
<body class="w-screen h-screen flex flex-col gap-10 items-center justify-center">
    <form action="updatePasswordAction.php" method="post" class='flex flex-col gap-4'>
        <h1 class="text-2xl text-center">Update Password</h1>
        <input type="text" placeholder="Username" name="username" class='border p-2 focus:outline-none'>
        <input type="password" placeholder=" Old Password" name="oldpassword" class='border p-2 focus:outline-none'>
        <input type="password" placeholder="New Password" name="newpassword" class='border p-2 focus:outline-none'>
        <input type="submit" value="Log in" class="bg-blue-500 text-white rounded-md flex w-fit mx-auto px-4 py-2">
    </form>
</body>
</html>