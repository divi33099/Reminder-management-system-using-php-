<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <div class="form">
            <form  method="post" action="login.php" autocompleteoff>
            <input type="text" name="username" class="textfield" required placeholder="Username"><br>
            <input type="password" name="password" class="textfield" required placeholder="password"><br>
            <input type="submit" value="Login" name="login_btn" class="btn">
            </form>
        </div>
    </div>
</body>
</html>