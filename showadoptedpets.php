<?php
@session_start();
if (!isset($_SESSION["admin_email"])) {
    header("location:showadoptedpets.php");
    
    

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

$status="adopted";
$select = "SELECT * FROM `pet` where status='$status'";

$result = $conn->query($select);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('headerfiles.html');
?>
    <meta charset="UTF-8">
    <title>Show Adopted Pets</title>
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
    
    <div class="petmiddle">
        <div class="info"> 
           <div class="headings">All Adopted Pets</div>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Breed</th>
      <th scope="col">Age</th>
      <th scope="col">Color</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Photo</th>
      <th scope="col">Left By</th>
      <th scope="col">Taken By</th>
        <th scope="col">Category</th>
        <th scope="col">Delete</th>
        
    </tr>
  </thead>
        
        <?php 
        while($row=mysqli_fetch_array($result)){
            ?>
       
           
            
    
        

  <tbody>
      
      <tr>
      <td><?php echo $row[0] ?></td>
      <td><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td><?php echo $row[3] ?></td>
      <td><?php echo $row[4] ?></td>
      <td><?php echo $row[5] ?></td>
      <td><img style="width:100px; height:100px ;background-size:cover" src="<?php echo $row[6] ?>"></td>
      <td><?php echo $row[7] ?></td>
      <td><?php echo $row[8] ?></td>
      <td><?php echo $row[9] ?></td>
      <td><a href="deletepet.php?id=<?php echo $row[0] ?>"><i class="fa fa-trash-o" style="font-size:36px"></i></a></td>
  
    </tr>
    
            </tbody>
        
           
        
        <?php
        }
        ?>
        </table>
        </div>
       </div>
    </div>
        <?php
include('footer.html');
?>

</body>
</html>

