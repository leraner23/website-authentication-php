<?php
$CORRECT_USERNAME = "SUJAN";
$CORRECT_PASSWORD ="Open";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $CORRECT_USERNAME && $password == $CORRECT_PASSWORD ){
        session_start();

        $_SESSION['username'] = 'Sujan';
        $_SESSION['isLoggedIn'] = true;
        header('location: welcome.php');
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
    <form action="" method="POST">
        <label for=""> Username <label>
            <input type="text" name = "username">


            <label for=""> Password <label>
            <input type="password" name = "password">

            <input type="submit">
</form>

</body>
</html>