<?php
   $title = "Windows Laptops"; 
   include ('header.php') ;
   $category = "Windows Laptops" ;
  ?>


 <div class="container category_title">
    <h1><?php echo "$category"; ?></h1>
  </div>

<?php 
 include ('all_products.php');
 foreach ($products as $product_id => $product) {
		 	if ($product["cat"]=="windows") {
		 		echo get_list_view_html($product_id,$product);
		 	}	      
  		} ;
  		include ('pagination.php');
  ?>

<?php include ('footer.php') ?>