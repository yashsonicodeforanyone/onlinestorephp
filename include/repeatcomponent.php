<style>
.card-img-top{
  height: 200px;
  width: 100%;
 
  
}

</style>
<?php



function contentsss($imgsource,$cardtitle,$carddiscription,$mrp,$percent)
{
   
  $offmrp=($mrp*$percent)/100;
  $mainmrp=$mrp-$offmrp;
    $vari="
    <div class=\"col-lg-3 col-md-4 col-sm-6 col-6\" id=\"cardis\">

<div class=\"card fixed\">
<a href=\"#\">    <img src=\"uploadimg/$imgsource\" class=\"card-img-top\" alt=\"...\" ></a>
    <div class=\"card-body\">
      <h5 class=\"card-title\">$cardtitle</h5>
      <p class=\"card-text\">card description<br>
      <button class=\"btn-primary\">Deal of the day</button>
      
     $mainmrp<i class=\"fa fa-rupee\"></i> <s>$mrp<i class=\"fa fa-rupee\"></i></s><br>
you Save Rs.$offmrp<br>
<small>offer $percent% off 
<li class=\"fas fa-star\"></li>
<li class=\"fas fa-star\"></li>
<li class=\"fas fa-star\"></li>
<li class=\"fas fa-star\"></li>
<li class=\"far fa-star\"></li></small>
</p>
      
    </div>
    <div class=\"card-footer\">
      <small class=\"text-muted\"><a href=\"#\">Add to cart </a></small>
    </div>
  </div>



</div>
    
    
    ";
    echo $vari;
}





?>

