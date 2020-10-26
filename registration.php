<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pno = $_POST['number'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from newuser where Email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Email already teaken";
}else{
    $reg = "insert into newuser(firstname, lastname, phone, Email , Password) values('$fname' , '$lname' , '$pno' , '$email' , '$pass')";
    mysqli_query($con , $reg);
    echo "registration Successful";
}

?>