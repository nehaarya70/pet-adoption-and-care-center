<?php

@session_start();
if (!isset($_SESSION["user_email"])) {
    header("location:myprofile.php");

}

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

$email=$_SESSION['user_email'];
$select = "SELECT * FROM `user` WHERE email='$email'";
$result = $conn->query($select);

$row=mysqli_fetch_row($result);



if (isset($_POST['submit']))
{
            $email=$_POST['email'];
            $name=$_POST['name'];
            $contact=$_POST['mobile'];
            $address=$_POST['address'];
            
            $select = "UPDATE user SET name='$name', contact='$contact', address='$address' where email='$email'";
            $result = $conn->query($select);
             header("location:userprofile.php?msg=0");
            
 
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
    <title>My Profile</title>
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
        <div class="headings"> MY PROFILE</div>
        <form action="userprofile.php" method="POST" enctype="multipart/form-data" id="myform">
            
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" readonly type="email" name="email" data-rule-required="true"
                       data-msg-required="Please Enter Email ID" value="<?php echo $row[0] ?>">
            </div>
            
            <div class="form-group">
                <label> Name</label>
                <input class="form-control" type="text" name="name" data-rule-required="true"
                       data-msg-required="Please Enter Your Name" value="<?php echo $row[1] ?>">
            </div>

            <div class="form-group">
                <label>Contact No.</label>
                <input class="form-control" type="number" name="mobile" data-rule-required="true"
                       data-msg-required="Please Enter Mobile No." minlength="10" maxlength="10" value="<?php echo $row[2] ?>">
            </div>



             

             <div class="form-group">
                <label>Address</label>
                
                <textarea class="form-control" name="address" row="5" cols="2" data-rule-required="true"
                       data-msg-required="Please Enter Your Address"><?php echo $row[3] ?></textarea>
                
            </div>


            <div class="form-group">
                <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
            </div>    
        
        <div class="form-group">
                    <?php
                    if (isset($_REQUEST["msg"])) {
                        if ($_REQUEST["msg"] == 0) {
                            ?>
                            <div class="alert alert-success">Profile Updated Successfully!!</div>
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