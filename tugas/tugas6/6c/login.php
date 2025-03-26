<?php
if (isset($_POST["submit"])) {
    if ($_POST["usn"] == "admin" && $_POST["pw"] == "admin") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) : ?>
        <p style="color: red;">username atau password salah</p>
    <?php endif ?>
    <form action="" method="post">
        <label for="username">Username : </label>
        <input type="text" name="usn" id="username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="pw" id="password" required>
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>