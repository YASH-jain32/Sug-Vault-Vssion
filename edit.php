<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SUG store Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>
<h1 style="text-align:center"> Stock history of SUG Store</h1>
</body>
<div class="main-content-inner">
                <div class="row">
                   
                    <!-- Contextual Classes start -->
                    <div class="col-lg-12 mt-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Stock history SUG</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-dark text-center">
                                            <thead class="text-uppercase">
                                                <tr class="table-active">
                                                <th scope="col">SR No.</th>
                                                <th scope="col">PRODUCT_ID</th>
                                                    <th scope="col">PRODUCT_NAME</th>
                                                   
                                                    <th scope="col">AVAILABLE STOCK</th>
                                                     <th scope="col">ACTION</th>
													 

                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
               $conn = new mysqli("localhost","root","","login");
               $sql = "SELECT * FROM stock";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) 
				  
                 while ($row = $result->fetch_assoc()) 
				 {
					  $count=$count+1;
    echo"
                <tr>
                    <th> $count </th>
                    <th> $row[Product_Id]</th>
                      <th>$row[Product_Name] </th>
                      <th>$row[Available_Stock] </th>
                      
                       <th>
                     <a class='btn btn-success' href='update.php?id=$row[id]'>Edit</a>
                     <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                 </th>
                    </tr>
                    ";
                 }
            ?>

                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                        <button onClick="window.print();" class="btn btn-primary" id="print-btn">Print</button> 
                                    </div>
           
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>


</div>   
                    </div>
                    <!-- Contextual Classes end -->
                   
        <!-- main content area end -->
      
<html>
<head>
	<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

</html>
    






    </div>
    <!-- page container area end -->
    <!-- offset area start -->
   
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
                
</html>                                          
