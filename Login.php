
<?php
include_once('studentconnection.php');
if(isset($_POST['Login'])){
    if(!empty($_POST['Email']) && !empty($_POST['Passsword']) ){
        $user = $_POST['Email'];
        $Password = $_POST['Password'];
        $sql = "SELECT *FROM userregistration";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $dbemail = $row['email'];
                $dbNew_password = $row['New_password'];
                if($dbemail == $user && $dbNew_password == $Password ){
                    echo "Login successfully!";
                    session_start();
                    $_SESSION['user'] = $dbemail;
                    header('location: profile . php');
                }
                else{
                    echo "Username or password does not match!";
                }
            }
        }
        else{
            die(mysqli_error($conn));
        }

    }else{
        echo "All fields are required!";
    }

}
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
    Login System</title>
    
    <link rel="stylesheet" href="Login_style.css">
</head>
<body background="bg.png">
    
   <div class="box">
        <h1>Login here</h1>
        
        <form action="" method="POST">
            <input type="text" name="Email" id="" placeholder="enter username " required>
            <input type="password" name="Password" id="" placeholder="enter passsword" required>
            <input type="submit" value="Login" name="Login"> 
            Not yet a member? <a href = "User.php" style="color:#ffc107;">Register</a>
            
        </form>
    </div>
</body>
</html>
