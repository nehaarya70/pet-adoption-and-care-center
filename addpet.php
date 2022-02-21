<?php
@session_start();
if (!isset($_SESSION["admin_email"])) {
    header("location:adminhome.php");

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

if (isset($_POST['add']))
{
            $breed=$_POST['breed'];
            $age=$_POST['age'];
            $color=$_POST['color'];
            $des=$_POST['des'];
            $status="orphan";
            $leftby=$_POST['leftby'];
            $cat=$_POST['cat'];
            $takenby="nobody";
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["photo"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
               
            $uploadOk = 1;
                    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }

            $sql = "INSERT INTO pet ". "(id,breed, age, 
               color,description,status,photo,leftby,takenby,category) ". "VALUES(NULL,'$breed','$age','$color','$des','$status','$target_file','$leftby','$takenby','$cat')";
            
            if ($conn->query($sql) ) {
                    header("location:addpet.php?msg=1");
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
    <title>Add Pet</title>
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
                        <a href="adminhome.php">
                        <?php echo $_SESSION['admin_email'] ?>
                        </a>
    </h3>
    </div>
    <div class="middle">
            
                <div style="text-align: center;font-size: 40px"> ADD PET</div>

        <form action="addpet.php" method="POST" enctype="multipart/form-data" id="myform">
        
            
            <div class="form-group">
                <label>Enter Breed</label>
                <input class="form-control" type="text" name="breed" data-rule-required="true"
                       data-msg-required="Please Enter Breed">
            </div>

            <div class="form-group">
                <label>Enter Age</label>
                <input class="form-control" type="number" name="age" data-rule-required="true"
                       data-msg-required="Please Enter Age" minlength="1" maxlength="2">
            </div>



             <div class="form-group">
                <label>Enter Color</label>
                <input class="form-control" type="text" name="color" data-rule-required="true"
                       data-msg-required="Please Enter Color">
            </div>

             <div class="form-group">
                <label>Description</label>
                
                <textarea class="form-control" name="des" row="5" cols="2"></textarea>
                
            </div>


            <div class="form-group">
                <label>Upload Photo</label>
                <input class="form-control" type="file" name="photo" data-rule-required="true"
                       data-msg-required="Please Upload Picture">
            </div>

            <div class="form-group">
                <label>Left By</label>
                <input class="form-control" type="text" name="leftby" data-rule-required="true"
                       data-msg-required="Please Fill This Info">
            </div>
            
            <div  class="form-group styled-select rounded">
                <label>Select Category</label>
                
                
            <select class="form-control" name="cat" id="cat">
                <option value="dog" >Dog</option>
                <option value="cat" >Cat</option>
                <option value="bird" >Bird</option>
             </select>
                      
            </div>

            <div class="form-group">
                <button type="submit" name="add" id="add" class="btn btn-success">Add</button>
            </div>  
            
           <div class="form-group">
                    <?php
                    if (isset($_REQUEST["msg"])) {
                        if ($_REQUEST["msg"] == 1) {
                            ?>
                            <div class="alert alert-succes">Pet Added Successfully!!"</div>
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