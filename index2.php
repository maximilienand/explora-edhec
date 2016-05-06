<?php 
require("lib/Design.php");
require("lib/Products_with_parse.php");


$design_object = new Design();
$products = new Products_with_parse();

$design_object->display_header();
$design_object->display_navbar();


echo'<div class="jumbotron">
        <h1> '.Config::SITE_NAME.' !</h1>
        <p>Congrats ! Welcome to your Website </p>
      </div>';

$products_array = $products->get_products_array_with_parse();
$i=0;
foreach($products_array as $row => $innerArray){

	echo '<div class="row">';
		  echo'<div class="col-md-4">
		    <div class="thumbnail">
		      <img src="'.$innerArray['img_link'].'" alt="'.$innerArray['name'].'" class="img-responsive img-thumbnail" style="max-width:75%;" >
		      <div class="caption">
		        <h3>'.$innerArray['name'].'</h3>
		        <span class="badge">'.$innerArray['price'].'</span>
		        <p>'.$innerArray['description'].'</p>
		        <p> <a href="#" class="btn btn-default" role="button" onClick="add_to_cart();">Add to Cart</a> <a href="'.$innerArray['mano_link'].'" target="_blank" class="btn btn-success" role="button">Buy on ManoMano</a></p>
		      </div>
		    </div>
		  </div>';
		//echo'</div>';

	$i++;
    if ($i%3 == 0) echo '</div><div class="row">';
  
}

$design_object->display_footer();



?>