<?php
   $title = "Jeans"; 
   include ('header.php') ;
   $category = "Jeans" ;
  ?>

<div class="container category_title">
    <h1><?php echo "$category"; ?></h1>
  </div>

<?php 
 include ('all_products.php');
 foreach ($products as $product_id => $product) {
		 	if ($product["cat"]=="jeans") {
		 		echo get_list_view_html($product_id,$product);
		 	}	      
  		} ;
  		include ('pagination.php');
  ?>

<?php include ('footer.php') ?>