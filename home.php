<?php
    session_start();
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md sticky-top bg-dark">
        <div class="container-fluid">
        <a href="home.php" class="navbar-brand text-white">Home</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="home.php" class="nav-link text-white"><?php echo $_SESSION['name']; ?></a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link text-white">Logout</a>
            </li>
        </ul>
        </div>
    </nav>
    <div class="container-fluid"> 
        <div class="banner">
            <div class="row">
                <div class="col-md-12 bg-secondary py-5">
                    <h2 class="py-5 text-center">Home Page</h2>
                </div>
            </div>
        </div>
        <div class="content m-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h3>Header</h3>
                        </div>
                        <div class="card-body">
                                <h3><b>Card title</b></h3>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque inventore deserunt iure error voluptates tempore ipsa cumque, nam blanditiis et omnis quibusdam ea culpa veritatis mollitia impedit accusantium neque fugit.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h3>Header</h3>
                        </div>
                        <div class="card-body">
                                <h3><b>Card title</b></h3>
                                <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque inventore deserunt iure error voluptates tempore ipsa cumque, nam blanditiis et omnis quibusdam ea culpa veritatis mollitia impedit accusantium neque fugit.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h3>Header</h3>
                        </div>
                        <div class="card-body">
                                <h3><b>Card title</b></h3>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque inventore deserunt iure error voluptates tempore ipsa cumque, nam blanditiis et omnis quibusdam ea culpa veritatis mollitia impedit accusantium neque fugit.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h3>Header</h3>
                        </div>
                        <div class="card-body">
                                <h3><b>Card title</b></h3>
                                <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque inventore deserunt iure error voluptates tempore ipsa cumque, nam blanditiis et omnis quibusdam ea culpa veritatis mollitia impedit accusantium neque fugit.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-md-12 bg-secondary">
                    <h2 class="p-5 text-center">Footer</h2>
                </div>
            </div>
        </div>
     </div>
</body>
</html>