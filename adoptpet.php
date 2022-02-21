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

if (isset($_POST['submit']))
{
    $id=$_POST['id'];
   $select = "SELECT * FROM `pet` WHERE id='$id'";

$result = $conn->query($select);
$row=mysqli_fetch_row($result);
   
}
  



?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('headerfiles.html');
?>
    <meta charset="UTF-8">
    <title>Adopt Pet</title>
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
           <div class="headings">Confirm Adoption</div>
       <div class="info"> 
           <div class="row">
    
            <img style="width:50%; height:50% ;background-size:cover;" src="<?php echo $row[6] ?>">
        
        </div> 
        
        
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Choice:</th>
      <th scope="col" style="text-transform:capitalize"><?php echo $row[1] ?></th>
      
    </tr>
  </thead>
  <tbody>
      
      <tr>
      <th scope="row">Category:</th>
      <td style="text-transform:capitalize"><?php echo $row[9] ?></td>
      
    </tr>
    <tr>
      <th scope="row">Age:</th>
      <td><?php echo $row[2] ?></td>
      
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
        
        
        <form action="thankspage.php" method="POST" enctype="multipart/form-data" id="myform">
            <div class="form-group">
                <button type="submit" name="confirm" id="confirm" class="btn btn-success">Confirm</button>
            </div>
            <input  type="hidden" name="id" value="<?php echo $row[0] ?>">

        </form>
    </div>
    </div>
    
        <?php
include('footer.html');
?>

</body>
</html>

