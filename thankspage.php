<?php
@session_start();
if (!isset($_SESSION["user_email"])) {
    header("location:thankspage.php");
    
    

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

if (isset($_POST['confirm']))
{
    $id=$_POST['id'];
    $status="adopted";
    $email=$_SESSION['user_email'];
    $update= "UPDATE pet SET status='$status', takenby='$email' WHERE id='$id'";


    $result = $conn->query($update);

   
}
  



?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('headerfiles.html');
?>
    <meta charset="UTF-8">
    <title>Thanks Page</title>
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
           <div class="headings"><span style='font-size:100px;'>&#128515;</span>
          </div>
        <div class="info">
        Thank you for adoption!! Our member will soon knock you at your door step.
            
        </div>
        <div class="info" >
        <a href="userhome.php" style="color:green;">Continue to home page.>></a>
        
        </div>
        
       </div>
    </div>
    </body>
    </html>