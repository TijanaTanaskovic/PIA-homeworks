<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'imdb');

$mail = $_POST['uname'];
$usname = $_POST['uname'];
$pass = $_POST['psw'];

$s= "select * from usertable where (username = '$usname' || email='$mail') && psw= '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$row = $result->fetch_assoc();


if($num==1){
    if($row['admin']=="admin")
    
        header('location:admin.php');
    else
    
        header('location:home.php');
    
}
else
{
    header('location:login.php');
}


?>