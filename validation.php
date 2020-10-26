<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from newuser where Email = '$email' && Password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$_SESSION['flag'] = $num;
    
if($num == 1){
    $query = "select firstname from newuser where Email = '$email' && Password = '$pass'"; 
    $res = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($res))
        $n = $row['firstname'];
    
    $_SESSION['username'] = $n;
    header('location:home.php');
}else{
    header('location:login.php');
}



?>