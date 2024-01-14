<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from register where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<!-- <html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css"> 

</head>
<body> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sug Vault Vsion</title>
  </head>
  <body>
    <?php
       include '_header.php';
    ?>
    <!-- slider start here-->
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1900x500/?store,grocery" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
</div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1900x500/?programmer,water" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1900x500/?nature,apple" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- category container starts here 

    <div class="container">
    <h2 class="text-center"> iDiscuss Browse Categories </h2>
    <div class="row">
      <!--fetch all the categories
      < 
      $sql = "SELECT * FROM `categories`";
      $result=mysqli_query($connect,$sql);
      while($row = mysqli_fetch_assoc($result))
      {
        //echo $row['category_id'];
        //echo $row['category_name'];
        // use for loop to iterate categories
        $id= $row['category_id'];
        $cat = $row['category_name'];
        $desc = $row['category_description'];
        echo '
        <div class="col-md-4 my-2">
     <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/500x400/?'. $cat .',coding python" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href ="threads.php"?catid='.$id.'">'. $cat .'</a></h5>
    <p class="card-text">'. substr($desc,0,90).'...</p>
    <a href="threads.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
  </div>

</div>

     </div>';
      
      }
      ?>

    </div>
    </div>
    <
    
    // include 'partials/_footer.php';
    
    ?>
    -->
    <?php

   include '_footer.php';
   ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
  
<!-- yaha se pehla code -->
<!-- <div class="form-wrapper">  -->
    <!-- <center><h3>Welcome: < echo $row['name']; ?> </h3></center> -->
	 <!-- <div class="reminder"> -->
   <!-- <div class="container-fluid bg-red text-light fixed-center">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div> -->


<br>
<br>
<br>
<br>
<marquee direction="right" behaviour="alternate" style="background:blue"><h1> WELCOME TO SUG STORE </h1></marquee>

<div class="container-fluid bg-green text-light fixed-center">
<!-- <p class="text-center mb-0 p-2" ><a href="logout.php">Log out</a></p> -->
<button onclick="window.location.href = 'logout.php';" style="background-color:red">Log Out</button>

</div>


</body>
</html>