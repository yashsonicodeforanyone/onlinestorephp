<?php
include "include/header.php";
include "include/dbh.php";


  



?>


<!--     navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Online Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Sell On flip Cart <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-bell" aria-hidden="true"></i>Notification<span class="sr-only">(current)</span></a>
      </li>

            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i>24X7 Helpline<span class="sr-only">(current)</span></a>
            </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user-circle-o" style="font-size:24px"></i> Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>sign up</a>
          <a class="dropdown-item" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
 
</nav>
<div id="navis" class="navbar-fixed">
<nav>
<ul>
  <li> <a href=""><small>Electronics</small></a> </li>
  <li> <a href=""><small>mobile & Accesories</small></a> </li>
  <li> <a href=""><small>laptop & Accesories</small></a> </li>
  <li> <a href=""><small>tv & home entertainement</small></a> </li>
  <li> <a href=""><small>Audio</small></a> </li>
  <li> <a href=""><small>Cameras</small></a> </li>
  <li> <a href=""><small>Smart technology</small></a> </li>
  <li> <a href=""><small>Music instrument</small></a> </li>
  <li> <a href=""><small>office & Stationary</small></a> </li>
  
</ul>
    
</nav>
</div>










<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <a href="hello.php"> <img src="img/formbackg.jpg" height="400px" width="100%" class="d-block w-100" alt="...">
    </div></a>
    <div class="carousel-item">
  <a href=""> <img src="img/formbackg.jpg" height="400px" width="100%" class="d-block w-100" alt="...">
    </a> 
  </div>
    <div class="carousel-item">
  <a href=""> <img src="img/libackground.jpg" height="400px" width="100%" class="d-block w-100" alt="...">
  </a>      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon blue"  aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `audio` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);

$rowss=mysqli_num_rows($result);

if($rowss>0){
  ?>

<div class="contai">


<h2>
    Audio
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);
}
 ?>
<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>
<?php
}
?>







<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `cameras` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){
  ?>

<div class="contai">


<h2>
    Cameras
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}
 ?>
<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>
<?php
}
?>





<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `laptopandaccesories` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){
?>

<div class="contai">


<h2>
    laptop and Accesories
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}
 ?>
<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>
<?php

}
?>





<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `mobileandaccesories` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){
  ?>
  <div class="contai">



<h2>
    Mobile and Accesories
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}
 ?>
<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>
<?php
}
?>





<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `electronics` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){
?>
<div class="contai">



<h2>
    Electronics
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}
 ?>











<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>

<?php
}
?>





<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `musicinstrument` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){

  ?>

<div class="contai">



<h2>
    Music instrument
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}

 ?>











<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>
<?php
}
?>



<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `tvandhome` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){
  ?>


<div class="contai">

<h2>
   Tv and Home
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}
 ?>











<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>
<?php
}
?>






<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `smarttechnology` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){
  ?>

<div class="contai">


<h2>
   Smart technology
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}
 ?>











<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>
<?php
}
?>






<?php

$Limitofpage=4;

$page=$_GET['page'];
$offsets=($page-1) * $Limitofpage;

$sql="SELECT * FROM `officeandstationary` ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);

if($rowss>0){
  ?>

<div class="contai">


<h2>
    Office And Stationary
  </h2>
<div class="row">

<?php 

while ($data=mysqli_fetch_assoc($result)) {

  
  $title=$data['title'];
  $description=$data['description'];
  $mrp=$data['mrp'];
  $img=$data['img'];
  $offerpercent=$data['offerpercent'];
  $product=$data['product'];
  

  contentsss($img,$title,$description,$mrp,$offerpercent);

}
 ?>











<div class="linker">
<a  href="">view alll</a>
</div>
</div>

</div>

<?php
}
?>















<br><br><br>

<?php


$sql="SELECT * FROM `cart`";
// ORDER BY `id` DESC LIMIT {$offsets},{$Limitofpage}
$result=mysqli_query($conn,$sql);
$rowss=mysqli_num_rows($result);
// echo $totalpage;

if($rowss > 0){
  $totalpage=ceil($rowss/$Limitofpage);
  $offset=($totalpage);
  


echo '<ul class="pagination">';
if($page > 1){
  
  echo '<li class="page-item">
  <a class="page-link" href="index.php?page='.($page-1).'">Previous</a>
  </li>';

}
for ($i=1; $i <=$totalpage ; $i++) { 
  echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
}
if($totalpage > $page){
echo '<li class="page-item">
<a class="page-link" href="index.php?page='.($page+1).'">Next</a>
</li>';
}
echo '</ul>';
}
?>
<!-- <a href="index.php?page='.($page+1).'"></a> -->


  
    <!-- <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li> -->
<!--     
    <li class="page-item active" aria-current="page">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li> -->
    <!-- <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li> -->
  










<?php

include "include/footer.php";

?>