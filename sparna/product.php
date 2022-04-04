<?php
	include ('all_products.php');

    $product_id = $_GET["id"];
    $product = $products[$product_id];

 	$title = $product["name"]; 
    include ('header.php') ;
  ?> 

<section>
	<div class="col-lg-7 col-md-7 col-sm-12 preview">
		<div class="col-lg-8 col-md-8 col-sm-8">
			<a href="#"><img src="<?php echo $product["img-t"]; ?>" class="cen thumbnail img-responsive"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thum">

			<?php foreach ($product["thumbs"] as $thumb) { ?>
					<a href="#" class="col-lg-6 col-md-6 col-sm-6 col-xs-3"><img src="<?php echo $thumb; ?>" class="thumbnail h-img"></a>
			<?php } ?>
			
		</div>
	</div>
	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	<table class="table table-bordered">
		<tr class="warning">
			<td>
			<h2><?php echo $product["name"]; ?></h2>
			<p><?php echo $product["description"]; ?></p>
			</td>
		</tr>
			<br>
		<tr class="warning">
			<td>
			<label for="sizes"><h4>Size</h4></label>
				<select id="sizes">
				<?php foreach ($product["sizes"] as $size) { ?>
					<option value="<?php echo $size; ?>"><?php echo $size; ?></option>
				<?php } ?>
					
				</select>
			</td>
		</tr>
		<tr class="warning">
			<td>
			<h2 id="price">BDT <?php echo $product["price"] ?></h2>
			<input class="btn btn-default" type="submit" value="Buy Now">
			</td>
		</tr>

		<tr class="warning">
			<td>
			<h4>In Stock</h4>
			<p>Delivery within 2-3 business days.</p>
			</td>
		</tr>

		<tr class="warning">
			<td>
			<p><i class=""></i>Pay cash on delivery</p>
			<p><i class=""></i>Return product while delivery</p>
			<p><i class=""></i>Genuine Product</p>
			</td>
		</tr>
	</table>
	</div>
</section>

<?php include ('footer.php') ?>