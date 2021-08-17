<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>
<body>
    <?php
        session_start();
        include('db.php');
        if($_POST['login']) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
            $result = mysqli_query($connect,$query);
            
            if(mysqli_num_rows($result) == 0) {
                echo "<h3 class='text-center text-warning'>Please register!</h3>";
            }else {
                foreach($result as $data) {
                    $db_username = $data['name'];
                    $db_email = $data['email'];
                    $db_password = $data['password'];
                }
                if($password == $db_password) {
                    $_SESSION['name'] = $db_username;
                    $_SESSION['email'] = $db_email;
                    $_SESSION['password'] = $db_password;
                    header('location:home.php');
                }else {
                    echo "<h3 class='text-center text-danger'>Incorrect Password!</h3>";
                }
            }
        }
    ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for=""><b>Email Address</b></label>
                                <input type="text" name="email" id="" class="form-control mt-2">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Password</b></label>
                                <input type="password" name="password" id="" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-5">
                                <input type="submit" name="login" value="Login" class="btn btn-primary btn-md btn-block">
                            </div> 
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            Don't have an account ? <a href="register.php" class="btn btn-success">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>