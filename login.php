<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login with Discord ID</title>
</head>
<body>
    <h2>Login</h2>
    <form action="verify.php" method="post">
        <label for="discord_id">Discord ID:</label>
        <input type="text" name="discord_id" id="discord_id" required>
        <br><br>
        <label for="code">Login Code:</label>
        <input type="text" name="code" id="code" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
