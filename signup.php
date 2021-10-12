<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:home.php');
}

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
    <div class="row">
        
        <div class="col-lg-6">
            <h2>Sign In</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label> username</label>
                    <input type="email" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label> password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
                <p>Already Have a Account? <a href="/php_practice/login-form/login.php">Log in</a></p>
            </form>
        </div>

    </div>

</div>

</body>
</html>