<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myaccount</title>
</head>
<body>
    <?php 
    session_start(); 
    if($_SESSION['loged_in']){
    echo $_SESSION['user'];
    }else
        echo 'you have to log in first!'
    ?>
</body>
</html>