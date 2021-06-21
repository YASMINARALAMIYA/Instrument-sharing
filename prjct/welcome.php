<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>

<link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand nav-link text-white " href=""><i class="fas fa-home"></i>Sharing Network</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lamiya">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="lamiya" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item btn btn-outline-dark"><a href="http://localhost/prjct/home.html" class="nav-link text-white "><i class="fas fa-home"></i> HOME</a></li>
                        <li class="nav-item btn btn-outline-dark"><a  href="http://localhost/prjct/lender/index.php?action=add&id=2" class="nav-link text-white ">Borrow</a></li>
                        <li class="nav-item btn btn-outline-dark"><a  href="" class="nav-link text-white ">Lend</a></li>
                        <li class="nav-item btn btn-outline-dark"><a  href="" class="nav-link text-white">SHARE</a></li>
                    </ul>

<br>


    <h1 class="my-5">Hello! <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

    </p>
</body>
</html>