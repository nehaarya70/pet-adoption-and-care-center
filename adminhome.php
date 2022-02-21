<?php
@session_start();
if (!isset($_SESSION["admin_email"])) {
    header("location:adminhome.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('headerfiles.html');
?>
    <meta charset="UTF-8">
    <title>Admin Home</title>
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
							<li><a href="adminprofile.php" class="active"> My Profile</a></li>
							<li><a href="adminchangepassword.php" class="scroll"> Change Password</a></li>
							<li><a href="adminlogout.php" class="scroll"> Log out</a></li>
						</ul>
					</div> 
				</div> 
    <div class="logo">
					<h3><a href="home.php">Pet Shelter</a>
                        <a href="adminhome.php">
                <?php echo $_SESSION['admin_email'] ?>
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
         <div class="row">
                           <div class="logo">
					<h3><a href="addpet.php">Add Pet</a>
                      </h3>
         </div>
             </div>
         
         
         
         <div class="row">
                           <div class="logo">
					<h3><a href="showusers.php">View Users</a>
                      </h3>
         </div>
             </div>
         
         
        <div class="row">
         <div class="logo">
					<h3><a href="showadmins.php">View Admins</a>
                      </h3>
         </div>
         </div>
         
         <div class="row">
         <div class="logo">
					<h3><a href="showpets.php">View Pets</a>
                      </h3>
         </div>
         </div>
         
         
         <div class="row">
         <div class="logo">
					<h3><a href="showorphanpets.php">View Orphan Pets</a>
                      </h3>
         </div>
         </div>
         
         
         <div class="row">
         
         <div class="logo">
					<h3><a href="showadoptedpets.php">View Adopted Pets</a>
                      </h3>
         </div>
         </div>
         
        </div>
    </div>
        <?php
include('footer.html');
?>

</body>
</html>

