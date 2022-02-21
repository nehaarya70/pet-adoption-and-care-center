<?php
@session_start();
if (!isset($_SESSION["user_email"])) {
    header("location:petdes.php");
    
    

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



$id=$_REQUEST["id"];
                

$select = "SELECT * FROM `pet` WHERE id='$id'";




$result = $conn->query($select);
$row=mysqli_fetch_row($result);


 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('headerfiles.html');
?>
    <meta charset="UTF-8">
    <title>Pet Description</title>
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
           <div class="row">
            <div class="headings" style="text-transform:capitalize"><?php echo $row[1] ?></div>
            
            <img style="width:50%; height:50% ;background-size:cover" src="<?php echo $row[6] ?>">
        
        </div> 
       <div class="info"> 
    
        
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Category:</th>
      <th scope="col" style="text-transform:capitalize"><?php echo $row[9] ?></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Age:</th>
      <td style="text-transform:capitalize"><?php echo $row[2] ?></td>
      
    </tr>
      
      <tr>
      <th scope="row">Color:</th>
      <td style="text-transform:capitalize"><?php echo $row[3] ?></td>
      
    </tr>
      
      <tr>
      <th scope="row">Description:</th>
      <td style="text-transform:capitalize"><?php echo $row[4] ?></td>
      
    </tr>
            </tbody>
        </table>
           
           </div>
        
        
        <form action="adoptpet.php" method="POST" enctype="multipart/form-data" id="myform">
                      <div class="form-group">
                          
                <button type="submit" name="submit" id="submit" class="btn btn-success">Adopt</button>
                          <input  type="hidden" name="id" value="<?php echo $row[0] ?>">
            </div>
        </form>
    </div>
    </div>
    
        <?php
include('footer.html');
?>

</body>
</html>
