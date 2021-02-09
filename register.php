<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>

<body>
    <?php
    require_once 'database.php';
    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if(mysqli_connect_errno()){
        echo 'error happened! '.mysqli_connect_errno();
    }
    $mail = '';
    $username = '';
    $password = '';
    ?>
    <form action="#" method="POST">
        <label>Email: <input type="email" placeholder="email" name="mail" value="<?php echo $mail ?>"></label><br>
        <label>User name: <input type="text" placeholder="username" name="username" value="<?php echo $username ?>"></label><br>
        <label>Password: <input type="password" placeholder="password" name="password" value="<?php echo $password ?>"></label><br>
        <input type="submit" name="submit" value="send"><br>
    </form>
    <?php
    if (isset($_POST['submit']) ) {

        var_dump($_POST);
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $query = "INSERT INTO users(nickname, email, password) VALUES('$username', '$mail', '$password')";
        // echo $query;
        $result_query = mysqli_query($connect, $query);
        echo 'user added!';
    }
    ?>
</body>

</html>