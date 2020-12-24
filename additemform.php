<?php

include "include/dbh.php";

if(isset($_POST['datas'])){
  $errors= array();
$productname=$_POST['productname'];
$model=$_POST['model'];
$mrp=$_POST['mrp'];
$percent=$_POST['percent'];
$categoryproduct=$_POST['categoryproduct'];
// echo $categoryproduct;

// $target_path = "C:/xamppp/htdocs/onelinestore/img/";  
$target_path =$_FILES['fileToUpload'];   
$filename =$_FILES['fileToUpload']['name'] ;   
$filetype =$_FILES['fileToUpload']['type'];  
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION)); 
$filesize =$_FILES['fileToUpload']['size'];   
  // print_r($target_path);


 
$desc=$_POST['desc'];
// echo  $filename,$filetype,$filesize,$productname,$imageFileType,$model,$mrp,$percent,$categoryproduct,$desc;


if($filesize>1048576){
  echo '<script>alert("image size is not upload")</script>'; 
  
  
}
if($filesize<1048576){
  
  if($imageFileType =='jpeg'|| $imageFileType=='jifi' || $imageFileType=='jpg' || $imageFileType=='png'){

   
    $sql="INSERT INTO $categoryproduct(`title`, `description`, `mrp`, `img`, `offerpercent`, `product`) VALUES('$productname','$model','$mrp','$filename','$percent','$categoryproduct')";     
    $result=mysqli_query($conn,$sql);

    $sql1="INSERT INTO `cart`(`title`, `description`, `mrp`, `img`, `offerpercent`, `product`) VALUES('$productname','$model','$mrp','$filename','$percent','$categoryproduct')";     
    $result1=mysqli_query($conn,$sql1);

    if($result or $result1){
      
      $uploaddestination="uploadimg/".$filename;
      if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$uploaddestination)){
        
      echo '<script>alert("everthing is done data is sumbit")</script>'; 
      // header("LOCATION:additemform.php"); 

      } 
      
    else{
      
      echo '<script>alert("data NOT upload success")</script>'; 
    }
    
  }
  }

}




}









include "include/header.php";

?>

<div class="row">
<div class="col-md-6 col-lg-10 offset-lg-1 offset-md-3" style="padding-top:50px;" >

<br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<h1 style="text-align: center;">Product detail</h1><br>
  <div class="row">
    <div class="col-lg-6">
      <input type="text" name="productname" class="form-control" placeholder="product name">
    </div>
    <div class="col-lg-6">
 
      <input type="text" class="form-control" name="model" placeholder="model name or model number" >
    </div><br><br>
    <div class="col-lg-6">



 
      <input type="tel" class="form-control" name="mrp" placeholder="mrp" >
    </div>
    <div class="col-lg-6">
 
      <input type="tel" class="form-control" value="" name="percent" placeholder="give to offer percentage on mrp between 0 to 100" min="0" max="100">
    </div><br><br>

    
    <div class=" col-lg-6 ">
<select class="form-control" name="categoryproduct">
 <option>Select category</option>
<option value="electronics">electronics</option>
<option value="mobileandaccesories">Mobile Accesories</option>
<option value="laptopandaccesories">laptop Accesories</option>
<option value="tvandhome">Tv and home</option>
<option value="audio">Audio</option>
<option value="cameras">Cameras</option>
<option value="smarttechnology">Smart Technology</option>
<option value="musicinstrument">Music Instrument</option>
<option value="officeandstationary">Office and Stationary</option>

</select>
    </div>

    <div class=" col-lg-6">

  
    <p>product image choose: <input type="file" name="fileToUpload" id="fileToUpload">

    </p>
</div>






<br><br>
    <div class="col-lg-12">
   <textarea name="desc" id="desc" cols="75" rows="4" placeholder="enter description of product
"></textarea>
    </div>



<div class="col-lg-6 offset-lg-3 my-1" style="text-align:center; padding-top:30px;">

     <button type="submit" name="datas" class="btn btn-primary">Submit</button>
    

</div>


</div>
    





</form>



<br><br><br>


</div>



</div>










</div>



<?php
include "include/footer.php";

?>