<?php
$password = '123hello';
$salt = 'fadsfj\a;lfkljghdfhdfhatteaqtgfsadf';
$hash = md5($password . $salt);

// echo $hash;
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
echo '<br>';
$hashedPassword = '$2y$10$GTLBldGZbXLySwKrrBi6uObQw6Ret5Vg4jHNH2/OxgqQqI/dNK76a';

if(password_verify($password, $hashedPassword))
    echo 'password ok';
else
    echo 'password not ok';

?>