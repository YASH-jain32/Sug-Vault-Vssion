
<?php
include 'dbcon.php';
$Product_Id=$_GET['Product_Id'];
$select = "SELECT * FROM stock1 WHERE Product_Id='$Product_Id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="form.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
    <form class="" action="" method="post">
      <div class="title">
        <h2>UPDATE STOCK</h2>
      </div>
      
        
      <div class="half">
        <div class="item">
          <label for="">Product_Id</label>
          <input value="<?php echo $row['Product_Id']?>" type="text" name="Product_Id" required value="">
        </div>
        <div class="item">
          <label for="">Product_Name</label>
          <input value="<?php echo $row['Product_Name']?>" type="text" name="Product_Name" required value="">
        </div>
</div>
<div class="half">
        
        <div class="item">
          <label for="">Available_Stock</label>
          <input value="<?php echo $row['Available_Stock']?>" type="text" name="Available_Stock" required value="">
        </div>
</div>

      <div class="action">
        <input type="submit" name = "update_btn" value = "update">
      </div>
    </form>
    <?php
require 'dbcon.php';
if(isset($_POST["update_btn"])){
  
  $Product_Id = $_POST["Product_Id"];
  $Product_Name = $_POST["Product_Name"];
  
  $Available_Stock = $_POST["Available_Stock"];
  
  
   $user = mysqli_query($con, "SELECT * FROM STOCK1 WHERE Product_Id = '$Product_Id'");
  if(mysqli_num_rows($user) > 0){
    // echo
    // "
    // <script> alert('Product_id Already Taken'); </script>
    // ";
  
  
    $update = "UPDATE  stock1 SET Product_Id='$Product_Id', Product_Name='$Product_Name', Available_Stock='$Available_Stock' WHERE Product_Id='$Product_Id'";
    $data=mysqli_query($con, $update);
    echo
    "
    <script> alert('Data updated Successful'); </script>
    ";
    header("location:stockhistory1.php");
  }
}
?>
  </body>
</html>

