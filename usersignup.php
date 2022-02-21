<?php

$db = "myproject";
$servername="localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['signup']))
{
            $email=$_POST['email'];
            $name=$_POST['name'];
            $contact=$_POST['mobile'];
            $address=$_POST['address'];
            $password=$_POST['password'];
            $repassword=$_POST['repassword'];
if($password!=$repassword)
{
    header("location:usersignup.php?msg=3");
}
    else{
            $select = "SELECT * FROM `user` WHERE email='$email'";
            $result = $conn->query($select);
            if (mysqli_num_rows($result) > 0) {
                header("location:usersignup.php?msg=0");
            } 
            else {
                $sql = "INSERT INTO user ". "(email,name, contact, 
               address,password) ". "VALUES('$email','$name',$contact,'$address','$password')";
                if ($conn->query($sql) ) {
                    header("location:usersignup.php?msg=1");
                }
            }
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('headerfiles.html');
?>
    <meta charset="UTF-8">
    <title>User Sign Up</title>
     <script>
        $(document).ready(function () {
            $('#myform').validate();
        });
    </script>
<style>
    
    
    
    </style>
</head>
<body  class="body">
<div class="container">
    <div class="logo">
					<h3><a href="home.php">Pet Shelter</a>
    </h3>
    </div>
    <div class="middle">
        <div class="headings"> USER SIGNUP</div>
        <form action="usersignup.php" method="POST" enctype="multipart/form-data" id="myform">
            <div class="form-group">
                <label>Enter Name</label>
                <input class="form-control" type="text" name="name" data-rule-required="true"
                       data-msg-required="Please Enter Your Name">
            </div>

            <div class="form-group">
                <label>Enter Contact No.</label>
                <input class="form-control" type="number" name="mobile" data-rule-required="true"
                       data-msg-required="Please Enter Mobile No." minlength="10" maxlength="10">
            </div>



             <div class="form-group">
                <label>Enter Email</label>
                <input class="form-control" type="email" name="email" data-rule-required="true"
                       data-msg-required="Please Enter Email ID">
            </div>

             <div class="form-group">
                <label>Address</label>
                
                <textarea class="form-control" name="address" row="5" cols="2" data-rule-required="true"
                       data-msg-required="Please Enter Your Address"></textarea>
                
            </div>


            <div class="form-group">
                <label>Enter Password</label>
                <input class="form-control" type="password" name="password" data-rule-required="true"
                       data-msg-required="Please Enter Password" minlength="8" maxlength="12">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="repassword" data-rule-required="true"
                       data-msg-required="Please Confirm Password" minlength="8" maxlength="12">
            </div>

            <div class="form-group">
                <button type="submit" name="signup" id="signup" class="btn btn-success">Submit</button>
            </div>    
            Already have an account?<a href="userlogin.php" style="text-decoration:none; font-family:'Play',sans-serif;color:blue;">&nbsp;Log In</a>
        
        <div class="form-group">
                    <?php
                    if (isset($_REQUEST["msg"])) {
                        if ($_REQUEST["msg"] == 0) {
                            ?>
                            <div class="alert alert-danger">Email already exists!!</div>
                            <?php
                        } 
                        
                        else if ($_REQUEST["msg"] == 3) {
                            ?>
                            <div class="alert alert-danger">Password doesnot Match</div>
                            <?php
                        } 
                        
                        else {
                            ?>

                            <div class="alert alert-success">SignUp Succesfull!!</div>
                            <?php
                        }
                    }
                    ?>
                </div>
        

            </form>
    </div>
    </div>
        <?php
include('footer.html');
?>

</body>
</html>