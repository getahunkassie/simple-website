<?php
if(!isset($_SESSION['user'])){
    header('location: Login.php');
}else{
    ?>
    <html>
        <head>
            <title>Profile</title>
        </head>
        <body>
            <a href="Login.php">Login</a>
            <a href="Logout.php">Logout</a>
            <a href="profile.php">profile</a>
            <h1>
                profile page
            </h1>
            <h2> <b>Welcome!!! </b> <?= $_SESSION['user'];?></h2>
        </body>
    </html>
    <?php
}
?>