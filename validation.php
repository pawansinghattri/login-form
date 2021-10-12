<?php
session_start();
$conn= mysqli_connect('localhost', 'root', '');
if($conn){
    echo "connection successful";
}else
    echo "Connection Failed";

    $x=mysqli_select_db($conn, 'sessionpractical');
    $name= $_POST['user'];
    $pass= $_POST['password'];

    $sql= "select * from signin where email = '$name' && password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == true){
        $_SESSION['username']=$name;
        header('location:home.php');

    }else{
        header('location:login.php');
    }

?>