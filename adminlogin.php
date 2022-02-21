<?php

session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","myproject");
    
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
echo $email=$_POST['email'];
echo $password=$_POST['password'];

$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['admin_email'] = $_POST['email'];
			$message='Logged in successfully';
			echo "$message";
			header("location:adminhome.php");
		}
		else{
			header("location:adminlogin.php?msg=1");
        
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
      <?php
include_once "headerfiles.html";
?>
  
    <meta charset="UTF-8">
    <title>Admin login</title>
      <script style="color:red;">
        $(document).ready(function () {
            $('#myform').validate();
        });
    </script>
    


</head>
<body class="body">
    
    
<div class="container">
   
<div class="logo">
					<h3><a href="home.php">Pet Shelter</a>
    </h3>
    </div>

    <div class="middle">
           <div class="headings">Admin Login</div>
        
        
        <form id="myform" action="adminlogin.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label >Enter Email</label>
                <input class="form-control" type="text" name="email" data-rule-required="true"
                       data-msg-required="Please Enter Your Name">
            </div>

            <div class="form-group">
                <label >Enter Password</label>
                <input class="form-control" type="password" name="password" data-rule-required="true"
                       data-msg-required="Please Enter Password">
            </div>

            <div class="form-group">
                <button type="submit"  name="submit" class="btn btn-info">Submit</button>
            </div>
            <div class="form-group">
                Don't have an account? <a href="adminsignup.php" style="color:blue">Sign up</a>
            </div>
             <div class="form-group">
                    <?php
                    if (isset($_REQUEST["msg"])) {
                        if ($_REQUEST["msg"] == 1) {
                            ?>
                            <div class="alert alert-danger">Invalid username or password!!"</div>
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