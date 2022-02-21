<?php
@session_start();
if (!isset($_SESSION["user_email"])) {
    header("location:userlogin.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('headerfiles.html');
?>
    <meta charset="UTF-8">
    <title>User Home</title>
     <script>
        $(document).ready(function () {
            $('#myform').validate();
        });
    </script>
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
     <div class="newmiddle">
     <form action="showbycat.php" method="POST" enctype="multipart/form-data" id="myform">
        <div  class="form-group styled-select rounded">
                
            <select style="width:500px ;height:40px" name="cat" id="cat">
                <option value="dog" >Dog</option>
                <option value="cat" >Cat</option>
                <option value="bird" >Bird</option>
             </select>
            <button type="submit" name="search" id="search" class="btn btn-info">Search<i class="fa fa-paw" style="font-size:25px"></i></button>  
        
                      
            </div>

            
                </form>   
             
<!--- breeds -->
        
        <div class="headings">
SHARE YOUR HOME WITH OUR NEW MEMBERS
        </div>
<?php 
    
    
$conn = mysqli_connect("localhost","root","","myproject");
$status="orphan";
$select = "select * from pet where status='$status' ORDER BY id DESC LIMIT 2 ";
$result = $conn->query($select);
while($row=mysqli_fetch_array($result)){

    ?>
	<div class="breeds w3ls-section">
		<div class="container">
			  
			<div class="col-md-5 w3lsbreeds-grid">
				<div class="breeds-left"> 
					<div class="wthree-almub">     
                        <img style="width:100%; height:100% ;background-size:cover" src="<?php echo $row[6] ?>">
                    </div>
				</div>
				<div class="breeds-right">
					<h4><?php echo $row[1] ?></h4>
					<p><?php echo $row[4] ?></p>
					<a class="w3more" href="petdes.php?id=<?php echo $row[0] ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
				</div>
				<div class="clearfix"></div>
			</div>
            
            
        </div>
        </div>
       <?php
            }
            ?>

        
	<!--- //breeds --> 
        

    
</div>
    </div>
        <?php
include('footer.html');
?>

</body>
</html>

