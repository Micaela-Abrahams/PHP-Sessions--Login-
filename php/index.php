<?
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header('Location: ../php/login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>My Login:</title>
</head>

<body>
    <div id="login-container">
        <h1>Login</h1>

        <form action=" " method="post">

            <label for="username">Username</label><br>
            <input type="email" name="username" required placeholder="Username"><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" required placeholder="Password"> <br>

            <input type="submit" value="Login" id="submit-button">

        </form>
    </div>
</body>

</html>