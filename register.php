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
        if($_POST['register']) {
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($user_name && $email && $password) {
                $query = "INSERT INTO `users`(`name`,`email`,`password`) VALUES ('$user_name','$email','$password')";
                mysqli_query($connect,$query);
                $_SESSION['name'] = $user_name;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location:home.php');
            }else {
                echo "<h3 class='text-center text-danger mt-3'>All field must be require!</h3>";
            }
           
        }  
        
    ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center">Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for=""><b>Name</b></label>
                                <input type="text" name="user_name" id="" class="form-control mt-2">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Email Address</b></label>
                                <input type="text" name="email" id="" class="form-control mt-2">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Password</b></label>
                                <input type="password" name="password" id="" class="form-control mt-2">
                            </div>
                            <div class="form-group mt-5">
                                <input type="submit" value="Sign Up" name="register" class="btn btn-success btn-md btn-block">
                            </div> 
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            If you have an account ? <a href="login.php" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>