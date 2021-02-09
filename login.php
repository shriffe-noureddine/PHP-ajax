<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lognin</title>
</head>
<body>
    <?php 
    session_start();
    
    $email = '';
    $email = '';
    ?>
    <form action="myaccount.php" method="POST">
        <h1>--------------- Log In -----------------</h1>
    <label>Email: <input type="email" name="email" value=""></label><br>
    <label>password: <input type="password" name="password" value=""></label><br>
    <input type="submit" value="log in" name="log_in">
    </form>
    <?php
    
    if(isset($_POST['log_in']) AND (!empty($_POST['email'])) AND (!empty($_POST['password']))){
        $loginQuery = "SELECT * FROM users WHERE email =" .$_POST['email']." && password =". $_POST['password'];
        echo 'you logged in';
        
        $_SESSION['loged_in']=true;
        $_SESSION['user']=$_POST['email'];
        var_dump($_SESSION);
    }else{
        echo 'email and password are required!';
    }
    ?>


</body>
</html>