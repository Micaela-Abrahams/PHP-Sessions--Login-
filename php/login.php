<?
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../php/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login Page</title>
</head>

<body>
    <div id="login-container">
        <h1>Welcome Back</h1>
        <p>You have successfully logged in with Username: <? echo $username; ?></p>
        <p>Password: <? echo $password; ?></p>

        <form action=" " method="post">

            <input type="submit" value="Logout" id="logout-button" name="logout">

        </form>
    </div>
</body>

</html>