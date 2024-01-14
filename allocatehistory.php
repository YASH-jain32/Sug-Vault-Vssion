<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
   
    $query = "SELECT * FROM `allocate` WHERE CONCAT(`PRODUCT_ID`, `PRODUCT_NAME`, `BORROWER_NAME`, `QUANTITY`, `DATE`,'DESCRIPTION') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `allocate`";
    $search_result = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "login");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" type="text/css" href="search.css">
    <link rel="stylesheet" type="text/css" href="back.css">
</head>

<style>
    {
        margin:0px;
        padding:0px;
        box-sizing:border-box;
    }
    body{
        padding-top: 50px;
        left:50%;
        background-color: ;
    }
    #searchbox input{
        width:90%;
        border:3px solid black;
        border-right:1px;
        font-size:18px;
        padding:7px;
        background:transparent;
        color:white;
        
    }
    #searchbtn{
        width:5%;
        margin-left:570px;
        background-color: yellow;
    border: none;
    color: Red;
    padding: 10px 20px;
    font-size: 15px;
    transition: 0.25s ease;
    box-shadow: 3px 3px 5px #aaa;
    }
   
    .btn-shadow {
    background-color: red;
    border: none;
    color: white;
    padding: 10px 20px;
    font-size: 15px;
    transition: 0.25s ease;
    box-shadow: 3px 3px 5px #aaa;
    margin-left:1000px;
  }
  .btn-shadow:hover {
    box-shadow: 5px 5px 10px #aaa;
    cursor: pointer;
  }
  .btnn-shadow {
    background-color: red;
    border: none;
    color: white;
    padding: 10px 20px;
    font-size: 15px;
    transition: 0.25s ease;
    box-shadow: 3px 3px 5px #aaa;
   
  }
  .btnn-shadow:hover {
    box-shadow: 5px 5px 10px #aaa;
    cursor: pointer;
  }
  #line{
    margin-left:150px;
  }
   

    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 1000px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
        background-color: yellow;
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
  
     tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width:90%;
        } 
        @media print{

body * {
    visibility: hidden;
}


.print-container, .print-container * {

    visibility: visible;
    margin : auto;

}

.print-container{
    
    position:absolute;
    
}
}

    } 
</style>
<script>

     function welcome(){
        window.open("home.php");
     }
</script>

    <body>
    <form action="allocatehistory.php" method="post">
    <div id="searchbox">
            <input  type="text" name="valueToSearch" placeholder="Value To Search">
</div>
<div id="searchbtn">
          <input type="submit" name="search" value="Search">
</div>
          <div>
          <button onClick="window.print();"class="btn-shadow">Print</button> 

        <button onClick="welcome()" class="btnn-shadow">Back</button>
                        
            </div>
            <I>  <U> <h3 id="line" class= "print-container">Movable Allocate items history of SUG store </h3></U></I>
            <table class= "print-container">
                <tr>
				    <th>PRODUCT_ID</th>
					<th>PRODUCT_NAME</th>
                    <th>BORROWER_NAME</th>
					<th>QUANTITY</th>
                    <th>DATE</th>
                    <th>DESCRIPTION</th>
                </tr>
      
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Product_Id'];?></td>
					<td><?php echo $row['Product_Name'];?></td>
					<td><?php echo $row['Borrower_Name'];?></td>
					<td><?php echo $row['Quantity'];?></td>
                    <td><?php echo $row['Date'];?></td>
                    <td><?php echo $row['Description'];?></td>
                   
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
	
    </div>
</html>


    