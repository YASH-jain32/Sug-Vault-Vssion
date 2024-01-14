<?php
include 'dbcon.php';

if(isset($_GET['Product_Id']))
{
$Product_Id= $_GET['Product_Id'];
$sql="DELETE FROM `stock` WHERE Product_Id = $Product_Id";
$con->query($sql);
}
header('location:stockhistory.php');
exit;
?>