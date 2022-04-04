<?php
   $title = "Cart"; 
   include ('header.php') ;
   $btn_action = "address.php";
   $btn_name = "Place Order";
  ?>
<div class="container">
    <ol class="breadcrumb">
	  <li class="active">Cart</li>
	  <li><a href="#">Address</a></li>
	  <li><a href="#">Payment</a></li>
	  <li><a href="#">Delivery</a></li>
	</ol>
</div>
 
<div class="container">


	<div class="col-lg-8">




	<table class="table table-bordered">

		<?php include ('cart-list.php') ?>
	</table>





	</div>





<!-- Calculation Panel -->
	<?php include ('calc.php') ?>
<!-- Calculation panel End -->
</div>

<?php include ('footer.php') ?>