<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$name1 = $_POST['name'];
$sur = $_POST['surname'];
$mail = $_POST['email'];
$usname = $_POST['username'];
$pass = $_POST['psw'];

$s= "select * from usertable where name = '$name1'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo"Username is already taken";
} 
else
{
    $reg= "insert into usertable(name, surname, email, username, psw) values ('$name1' , '$sur' , '$mail', '$usname', '$pass')";
    mysqli_query($con, $reg);
    echo"Registration is successful";
}


?>