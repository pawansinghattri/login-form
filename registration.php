<?php
session_start();
// header('location: login.php');
$conn= mysqli_connect('localhost', 'root', '');

    $x=mysqli_select_db($conn, 'sessionpractical');
    $name= $_POST['user'];
    $pass= $_POST['password'];

    $sql= "select * from signin where email = '$name' && password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "Account Already Used";

    }else{
        $qy = "insert into signin(email, password) values('$name', '$pass') ";
        mysqli_query($conn, $qy);
        if($conn){
            echo 'Your Account has been created Please 
            <a href="/php_practice/login-form/login.php">Log in</a>';
        }else{
            echo "Connection Failed";
        }
    }
    mysqli_close($conn);

?>