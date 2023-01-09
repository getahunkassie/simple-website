<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
include_once('studentconnection.php');
if(isset($_POST['Register'])){
$StudentID = $_POST['StudentID'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Gname = $_POST['Gname'];
$sex= $_POST['sex'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$parent_phone = $_POST['parent_phone'];
$Birth_Date = $_POST['Birth_Date'];
$Registration_Date = $_POST['Registration_Date'];
$Grade = $_POST['Grade'];
$Section = $_POST['Section'];
$New_password = $_POST['New_password'];
$Confirm_password= $_POST['Confirm_password'];
$image = $_POST['image'];
    $sql = "INSERT INTO userregistration(StudentID, Fname, Lname,Gname,sex,email,
    phone_number,parent_phone,Birth_Date,Registration_Date,Grade,Section,
    New_password, Confirm_password, image) 
    VALUES('$StudentID','$Fname', '$Lname','$Gname ', '$sex','$email ','$phone_number',
    '$parent_phone', '$Birth_Date','$Registration_Date ', '$Grade', '$Section', 
    '$New_password','$Confirm_password', '$image')";
    $result = mysqli_query($conn,$sql);
    if($result){

        header("Location:Login.php");
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Signup_style.css">
    <title>
    Signup System
</title>
<!--<link rel="stylesheet" href="css/Login_style.css"-->
</head>
<body background="bg.png">

    <div class="box">
        
        <form action="" method="POST">
        <table border="0">
            <tr><td>           
        <h1>Register here</h1></td></tr>
        <tr><td><label>SID</label></td><td><input type="text" name="StudentID" id="" placeholder="enter Student ID" required></td>
         <td> <label>First Name</label></td> <td><input type="text" name="Fname" id="" placeholder="enter First Name" required pattern="[a-zA-Z'-'\s]*"></td></tr><br>
          <tr><td><label>Last Name</label></td><td> <input type="text" name="Lname" id="" placeholder="enter Last Name" required pattern="[a-zA-Z'-'\s]*"></td>
          <td><label>G/Father Name</label></td><td><input type="text" name="Gname" id="" placeholder="enter G/Father Name" required pattern="[a-zA-Z'-'\s]*"></td></tr><br>
          <tr><td> <label>Sex</label></td>
            <td colspan="2"><input type="radio" name="sex" id="" value="Male" required>Male
            <input type="radio" name="sex" id="" value="Female" required> Female<br></td></tr>
          <tr><td><label>Email</label></td><td>  <input type="email" name="email" id="" placeholder=" enter Email"></td></tr><br>
          <tr><td><label>phone_number</label></td><td>  <input type="phone" name="phone_number" id="" required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('enter 10 digit number')" placeholder=" enter phone number"></td>
          <td><label>parent_phone</label></td><td>  <input type="phone" name="parent_phone" id="" required pattern="[0-9]{10}" oninvalid="this.setCustomValidity('10 digit number')" placeholder=" enter parent_phone"></td></tr>
           <tr><td><label>Date of Birth</label></td><td> <input type="date" name="Birth_Date" id="" placeholder="enter Date of birth"></td>
            <td><label>Registration Date</label></td> <td><input type="date" name="Registration_Date" id="" placeholder="enter registration date"></td></tr><br>
            <tr><td><label>Grade</label></td>
            <td class ="Select">
                <select name="Grade">
                <option value="select"  selected>Select</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                
            </td>
            
            <td><label>Section</label></td>
            <td class ="Select">
                <select name="Section">
                <option value="select"  selected>Select</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
                <option value="Q">Q</option>
                <option value="R">R</option>
                <option value="S">S</option>
                <option value="T">T</option>
                <option value="U">U</option>
                <option value="V">V</option>
                <option value="W">W</option>
                <option value="X">X</option>
                <option value="Y">Y</option>
                <option value="Z">Z</option>
                </select>
                <td align="center"></td>
            </td>
            </tr>
            
            </select> <br>
           <tr><td> <label>New password</label></td><td><input type="password" name="New_password" id="" placeholder="Please enter passsword" required></td>
           <td> <label>Confirm password</label></td><td> <input type="password" name="Confirm_password" id="" placeholder="Confirm passsword" required></td></tr>
            <tr><td colspan="2"><input type="submit" value="Register" name="Register"> 
Already a member? <a href = "Login.php" style="color:#ffc107;">Login</a></td></tr>
<div class="grid-details">

</div>
<div class="Profile-image">
    <input type="file" id="image-preview" name ="image" class="file-input" required>
</div>
        </form>
       
        </table> 
    </div>
</body>
</html>



