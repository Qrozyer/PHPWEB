<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == 'admin') {
        header('Location: login.php');
        exit;
    } else {
        echo "<script>alert('Wrong username or password!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username" name="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password" name="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>

<?php
// GET : adalah variable superglobal yang biasa digunakan untuk formulir dan data yang dikirimkan melalui URL kalau get methodnya get.
// POST : adalah variable superglobal yang biasa digunakan untuk formulir dan data yang dikirimkan melalui method POST serta tidak ditampilkan isinya di url.


// list variable superglobal :
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
?>