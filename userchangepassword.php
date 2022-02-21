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

@session_start();
if (!isset($_SESSION["user_email"])) {
    header("location:userchangepassword.php");

}

if (isset($_POST['submit']))
{
            $password=$_POST['password'];
            $newpass=$_POST['newpass'];
            $confirmpass=$_POST['confirmpass'];
            $email=$_SESSION['user_email'];
            
if($newpass!=$confirmpass)
{
    header("location:userchangepassword.php?msg=3");
}
    else{
            $select = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
            $result = $conn->query($select);
            if (mysqli_num_rows($result) == 0) {
                header("location:userchangepassword.php?msg=0");
            } 
            else {
                $sql = "UPDATE user SET password='$newpass' WHERE email='$email'";
            if ($conn->query($sql) ) {
                    header("location:userchangepassword.php?msg=1");
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
    <title>Change Password</title>
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
    <div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle">
						<ul class="toggle-menu">
							<li><a href="userprofile.php" class="active"> My Profile</a></li>
							<li><a href="userchangepassword.php" class="scroll"> Change Password</a></li>
							<li><a href="userlogout.php" class="scroll"> Log out</a></li>
						</ul>
					</div> 
				</div> 
    <div class="logo">
					<h3><a href="home.php">Pet Shelter</a>
                        <a href="userhome.php">
                <?php echo $_SESSION['user_email'] ?>
                        </a>
    </h3>
    </div>
     <script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script>
    
    <div class="middle">
        <div class="headings">CHANGE PASSWORD</div>
        <form action="userchangepassword.php" method="POST" enctype="multipart/form-data" id="myform">
            <div class="form-group">
                <label>Enter Old Password</label>
                <input class="form-control" type="password" name="password" data-rule-required="true"
                       data-msg-required="Please Enter Password">
            </div>

            <div class="form-group">
                <label>Enter New Password</label>
                <input class="form-control" type="password" name="newpass" data-rule-required="true"
                       data-msg-required="Please Enter New Password" minlength="8" maxlength="12">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="confirmpass" data-rule-required="true"
                       data-msg-required="Please Confirm Password" minlength="8" maxlength="12">
            </div>

            <div class="form-group">
                <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
            </div>    
        
        
        <div class="form-group">
                    <?php
                    if (isset($_REQUEST["msg"])) {
                        if ($_REQUEST["msg"] == 0) {
                            ?>
                            <div class="alert alert-danger">Wrong Password Entered!!</div>
                            <?php
                        } 
                        
                        else if ($_REQUEST["msg"] == 3) {
                            ?>
                            <div class="alert alert-danger">Password doesnot Match</div>
                            <?php
                        } 
                        
                        else {
                            ?>

                            <div class="alert alert-success">Password changed Succesfull!!</div>
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