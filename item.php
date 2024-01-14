






<?php
require 'dbcon.php';
if(isset($_POST["Submit"])){
  $Gate_pass = $_POST["Gate_Pass"];
  $DR_No = $_POST["DR_No"];
  $Product_id = $_POST["Product_Id"];
  $Product_name = $_POST["Product_Name"];
  $Price = $_POST["Price"];
  $Quantity = $_POST["Quantity"];
  $Date = $_POST["Date"];
  
  $user = mysqli_query($con, "SELECT * FROM ADDITEM WHERE Product_id = '$Product_id'");
  if(mysqli_num_rows($user) > 0){
    echo
    "
    <script> alert('Product_id Already Taken'); </script>
    ";
  }
  else{
    $query = "INSERT INTO ADDITEM VALUES('$Gate_pass', '$DR_No', '$Product_id', '$Product_name', '$Price', '$Quantity', '$Date')";
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
        <h2>ITEM DETAILS</h2>
      </div>
      <div class="half">
        <div class="item">
          <label for="">Gate_Pass</label>
          <input type="text" name="Gate_Pass" required value="">
        </div>
        <div class="item">
          <label for="">DR_No</label>
          <input type="text" name="DR_No" required value="">
        </div>
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
          <label for="">Price</label>
          <input type="text" name="Price" required value="">
        </div>
        <div class="item">
          <label for="">Quantity</label>
          <input type="text" name="Quantity" required value="">
        </div>
</div>
<div class="half">
        <div class="item">
          <label for="">Date</label>
          <input type="date" name="Date" required value="">
        </div>
        
        </div>
      <div class="action">
        <input type="submit" name = "Submit" value = "Submit">
      </div>
    </form>

  </body>
</html>
