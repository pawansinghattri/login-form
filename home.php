<?php
session_start();
// if(!isset($_SESSION['username'])){
//     header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_SESSION['username'])){
        echo '<h2>Welcome '.$_SESSION['username'].'</h2>
        <a href="logout.php">Logout</a>';
        }else{
            echo '<h2>Welcome Anonymous User</h2>
            <a href="login.php">Login</a>';
        }
        ?>
    </div>
    
</body>
</html>