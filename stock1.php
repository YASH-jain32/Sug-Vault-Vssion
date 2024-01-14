


<?php
require 'dbcon.php';
if(isset($_POST["Submit"])){
  
  $Product_id = $_POST["Product_Id"];
  $Product_name = $_POST["Product_Name"];
  
  $Available_Stock = $_POST["Available_Stock"];
  
  
  $user = mysqli_query($con, "SELECT * FROM STOCK1 WHERE Product_id = '$Product_id'");
  if(mysqli_num_rows($user) > 0){
    echo
    "
    <script> alert('Product_id Already Taken'); </script>
    ";
  }
  else{
    $query = "INSERT INTO STOCK1 VALUES('','$Product_id', '$Product_name', '$Available_Stock')";
    mysqli_query($con, $query);
    echo
    "
    <script> alert('Data Submitted Successful'); </script>
    ";
    header("location:home.php");
  }
}
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
        <h2>STOCK ENTRY</h2>
      </div>
      
        
      <div class="half">
        <div class="item">
          <label for="">Product_Id</label>
          <input type="text" name="Product_Id" required value="">
        </div>
        <div class="item">
          <label for="">Product_Name</label>
          <input type="text" name="Product_Name" required value="">
        </div>
</div>
<div class="half">
        
        <div class="item">
          <label for="">Available_Stock</label>
          <input type="text" name="Available_Stock" required value="">
        </div>
</div>

      <div class="action">
        <input type="submit" name = "Submit" value = "Submit">
      </div>
    </form>

  </body>
</html>
