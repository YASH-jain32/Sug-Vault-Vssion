






<?php
require 'dbcon.php';
if(isset($_POST["Submit"])){
  $Product_Id = $_POST["Product_Id"];
  $Product_Name = $_POST["Product_Name"];
  $Borrower_Name = $_POST["Borrower_Name"];
  $Quantity = $_POST["Quantity"];
  $Date = $_POST["Date"];
  $Description=$_POST["Description"];

  $query = "INSERT INTO ALLOCATE VALUES('', '$Product_Id','$Product_Name','$Borrower_Name','$Quantity', '$Date','$Description')";
     $data = mysqli_query($con,$query);
     
     if($data){

     echo "ALLOCATION SUCCESSFULLY";
     header("location:home.php");
     }

     else{
     echo "FAILED";

     }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Allocate Item</title>
    <link rel="stylesheet" href="form.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
    <form class="" action="" method="post">
      <div class="title">
        <h2>Allocation DETAILS</h2>
      </div>
      <div class="half">
        <div class="item">
          <label for="">Product_ID</label>
          <input type="text" name="Product_Id" required value="">
        </div>
        <div class="item">
          <label for="">Product_Name</label>
          <input type="text" name="Product_Name" required value="">
        </div>
</div>
        
      <div class="half">
        <div class="item">
          <label for="">Borrower_Name</label>
          <input type="text" name="Borrower_Name" required value="">
        </div>
        
</div>
<div class="half">
        
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
        <div class="item">
          

          <label for="">Description</label>
          <input type="text" name="Description" cols="10" rows="10">

        </div>
        
        </div>
      <div class="action">
        <input type="submit" name = "Submit" value = "Submit">
      </div>
    </form>

  </body>
</html>
